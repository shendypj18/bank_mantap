<?php

namespace Encore\Admin\Backup;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BackupController
{
    /**
     * Index interface.
     *
     * @return Content
     */
    public function remove_tag($string, $tagname)
    {
        $pattern = "#<\s*?$tagname\b[^>]*>(.*?)</$tagname\b[^>]*>#s";
        preg_match($pattern, $string, $matches);
        return isset($matches[1]) ? $matches[1] : $string;
    }

    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('Backup');
            $backup = new Backup();
            $x = $backup->getExists();
            $x[0]['disk'] = $this->remove_tag($x[0]['disk'], 'error');
            $content->body(view('laravel-admin-backup::index', [
                'backups' => $x,
            ]));
        });
    }

    /**
     * Download a backup zip file.
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\BinaryFileResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function download(Request $request)
    {
        $disk = $request->get('disk');
        $file = $request->get('file');

        $storage = Storage::disk($disk);


        $fullPath = $storage->getDriver()->getAdapter()->applyPathPrefix($file);

        if (File::isFile($fullPath)) {
            return response()->download($fullPath);
        }

        return response('', 404);
    }

    /**
     * Run `backup:run` command.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * Delete a backup file.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        $disk = Storage::disk($request->get('disk'));
        $file = $request->get('file');

        if ($disk->exists($file)) {
            $disk->delete($file);

            return response()->json([
                'status'  => true,
                'message' => trans('admin.delete_succeeded'),
            ]);
        }

        return response()->json([
            'status'  => false,
            'message' => trans('admin.delete_failed'),
        ]);
    }
    public static function allTablesMySQL($connection = null)
    {
        return collect(DB::connection($connection)->select('show tables'))->map(function ($val) {
            foreach ($val as $key => $tbl) {
                return $tbl;
            }
        });
    }
    public function run () {
        $get_all_table_query = "SHOW TABLES";
        $result = DB::select(DB::raw($get_all_table_query));
        $tables = $this->allTablesMySQL();
        $tables = $this->allTablesMySQL();
        $j = 0;
        for ($i = 0; $i < count($tables); $i++) {
            if (strpos($tables[$i], 'kategori') !== false) {
                $temp = $tables[$j];
                $tables[$j] = $tables[$i];
                $tables[$i] = $temp;
                $j += 1;
            }
        }

        $structure = '';
        $data = '';
        foreach ($tables as $table) {
            $show_table_query = "SHOW CREATE TABLE " . $table . "";

            $show_table_result = DB::select(DB::raw($show_table_query));

            foreach ($show_table_result as $show_table_row) {
                $show_table_row = (array)$show_table_row;
                $structure .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
            }
            $select_query = "SELECT * FROM " . $table;
            $records = DB::select(DB::raw($select_query));

            foreach ($records as $record) {
                $record = (array)$record;
                $table_column_array = array_keys($record);
                foreach ($table_column_array as $key => $name) {
                    $table_column_array[$key] = '`' . $table_column_array[$key] . '`';
                }

                $table_value_array = array_values($record);
                $data .= "\nINSERT INTO $table (";

                $data .= "" . implode(", ", $table_column_array) . ") VALUES \n";

                foreach ($table_value_array as $key => $record_column)
                    $table_value_array[$key] = addslashes($record_column);

                $data .= "('" . implode("','", $table_value_array) . "');\n";
            }
        }
        $file_name = storage_path('app/Laravel/'). date('Y-m-d-h-i-s') . '.sql';
        $file_handle = fopen($file_name, 'w + ');

        $output = $structure . $data;
        fwrite($file_handle, $output);
        fclose($file_handle);
        echo "DB backup ready";
    }

    public function run2()
    {
        try {
            ini_set('max_execution_time', 300);

            // start the backup process
            Artisan::call('backup:run --only-db --disable-notifications');

            $output = Artisan::output();

            return response()->json([
                'status'  => true,
                'message' => $output,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
