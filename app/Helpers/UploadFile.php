<?php

namespace App\Helpers;

use File;

trait UploadFile {

    function storeFile($file, $path)
	{
        if ( ! File::exists(public_path('uploads/' . $path)) ) {
            File::makeDirectory(public_path('uploads/' . $path), 0755, true, true);
        }

        $filenameWithExt = $file->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $file->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = uniqid() . time().'.'.$extension;
        // Upload Image
        $path = $file->storeAs($path, $fileNameToStore, 'public_uploads');

        return $fileNameToStore;
    }

    public function deleteFile($file, $path)
    {
        if ( File::exists(public_path('uploads/'.$path.'/'.$file)) ){
            return File::delete(public_path('uploads/'.$path.'/'.$file));
        }

        return false;
    }
}