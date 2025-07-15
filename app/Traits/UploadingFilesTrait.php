<?php

namespace App\Traits;
use Livewire\WithFileUploads;
 
trait UploadingFilesTrait  {


    use WithFileUploads;

    public $photos = [];

    public static function uploadSingleFile($uploadedFile,$folderName,$disk ) {

        if(! $uploadedFile) {
            return ;
        }

        $ex = $uploadedFile->getClientOriginalExtension();
        $filename = $folderName . time() . '_' . rand(00000, 99999) . '.' . $ex;
            $path=$uploadedFile->storeAs($folderName,$filename,$disk);
            $attchments=$path;
        
        return   $attchments;
    }

 

    
 
    public  static function  uploadsFiles($uploadedFiles, $dbColumName, $disk)
    {
        if(!  ($uploadedFiles)) {
          return ;
         }



        foreach ($uploadedFiles as $file) {
            if ($file->isValid()) {

                $ex = $file->getClientOriginalExtension();
                $filename = $disk . time() . '_' . rand(00000, 99999) . '.' . $ex;
                $path = $file->storeAs('/', $filename, $disk);

                $attchments_file[] = $path;
            }
        }
       
        return  $attchments_file;
    }

}

 

