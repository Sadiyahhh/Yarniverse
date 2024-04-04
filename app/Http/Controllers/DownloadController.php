<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download(Request $request)
    {        
        $filename = $request->filename;

        // Define the path to the file
        $filePath = storage_path('app\public\\' . $filename);

        // Check if the file exists
        if ($filename && file_exists($filePath)) {
            // Return the file as a response
            return response()->download($filePath);
        } else {
            // Return a response indicating that the file was not found
            return response()->json(['error' => 'File not found'], 404);
        }
    }
}