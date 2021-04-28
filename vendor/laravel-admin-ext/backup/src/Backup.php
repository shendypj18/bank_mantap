<?php

namespace Encore\Admin\Backup;

use Encore\Admin\Admin;
use Encore\Admin\Extension;
use Illuminate\Support\Facades\Storage;
use Spatie\Backup\Commands\ListCommand;
use Spatie\Backup\Tasks\Monitor\BackupDestinationStatus;
use Spatie\Backup\Tasks\Monitor\BackupDestinationStatusFactory;

class Backup extends Extension
{
    public function getExists()
    {
        $statuses = BackupDestinationStatusFactory::createForMonitorConfig(config('backup.monitorBackups'));

        $listCommand = new ListCommand();

        $rows = $statuses->map(function (BackupDestinationStatus $backupDestinationStatus) use ($listCommand) {
            return $listCommand->convertToRow($backupDestinationStatus);
        })->all();

        foreach ($statuses as $index => $status) {
            $name = $status->backupDestination()->backupName();

            $files = array_map('basename', $status->backupDestination()->disk()->allFiles($name));
            $rows[$index]['files'] = array_slice(array_reverse($files), 0, 30);
            $total = 0;
            foreach($files as $file) {
                $total += Storage::size('Laravel/'.$file);
            }
            $total /= 1000000;
            $rows[0]['usedStorage'] = round($total, 2) . ' MB';
            $rows[0]['amount'] = count($files);
        }
        return $rows;
    }

    /**
     * Bootstrap this package.
     *
     * @return void
     */
    public static function boot()
    {
        static::registerRoutes();

        Admin::extend('backup', __CLASS__);
    }

    /**
     * Register routes for laravel-admin.
     *
     * @return void
     */
    protected static function registerRoutes()
    {
        parent::routes(function ($router) {
            /* @var \Illuminate\Routing\Router $router */
            $router->get('backup', 'Encore\Admin\Backup\BackupController@index')->name('backup-list')->middleware('singlelogin');
            $router->get('backup/download', 'Encore\Admin\Backup\BackupController@download')->name('backup-download')->middleware('singlelogin');
            $router->post('backup/run', 'Encore\Admin\Backup\BackupController@run')->name('backup-run')->middleware('singlelogin');
            $router->delete('backup/delete', 'Encore\Admin\Backup\BackupController@delete')->name('backup-delete')->middleware('singlelogin');
        });
    }

    /**
     * {@inheritdoc}
     */
    public static function import()
    {
        parent::createMenu('Backup', 'backup', 'fa-copy');

        parent::createPermission('Backup', 'ext.backup', 'backup*');
    }
}
