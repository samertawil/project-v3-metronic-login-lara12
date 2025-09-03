<?php

namespace App\Factories;

use Illuminate\Http\UploadedFile;
use App\Traits\UploadingFilesTrait;

class UploadAttchmentFactory
{
   public  UploadedFile $dbColumnName;
   public  string $folderName='';
   public  string $disk='';


    public function __construct(UploadedFile $dbColumnName,string $folderName, string $disk)
    {
        $this->dbColumnName=$dbColumnName;
        $this->folderName=$folderName;
        $this->disk=$disk;
    }

    public function makeSingleImage() {

        

        if ($this->dbColumnName) {
           return UploadingFilesTrait::uploadSingleFile($this->dbColumnName, $this->folderName, $this->disk);
        }
    }
}
