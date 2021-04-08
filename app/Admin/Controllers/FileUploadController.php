<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController
{
    public function upload(Request $request)
    {
        if ($request->file('file')) {
            $path_toFile = Storage::putFile('public/images/navbar-konten', $request->file('file'));
            return json_encode(['location' => Storage::url($path_toFile)]);
        }
    }
}
