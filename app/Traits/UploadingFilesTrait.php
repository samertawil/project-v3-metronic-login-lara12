<?php

namespace App\Traits;

use Livewire\WithFileUploads;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;


trait UploadingFilesTrait
{


    use WithFileUploads;



    public static function uploadSingleFile(UploadedFile  $uploadedFile, string $folderName, string $disk): mixed
    {

        
        $ex = $uploadedFile->getClientOriginalExtension();
        $filename = $folderName . time() . '_' . rand(00000, 99999) . '.' . $ex;
        $path = $uploadedFile->storeAs($folderName, $filename, $disk);
         

        return  $path;
    }



    public static function uploadSingleFileResize(UploadedFile $uploadedFile, string $folderName, string $disk, int $hight, int $width): object|string
    {

        $extension = strtolower($uploadedFile->getClientOriginalExtension()); // الحصول على الامتداد الأصلي (مثل jpg، png..)


        $fileSize = $uploadedFile->getSize() / 1024;  //KB
        $tempPath = $uploadedFile->getRealPath();
        $mimeType = $uploadedFile->getMimeType();
        $info = getimagesize($tempPath);
        $fileWidth = $info[0] ?? '';
        $fileHeight = $info[1] ?? '';
        $fileType = $info['mime'] ?? '';



        if($mimeType) {
            if (str_starts_with($mimeType, 'image/')) {
                $type = 'صورة';
            } elseif (str_starts_with($mimeType, 'video/')) {
                $type = 'فيديو';
            } elseif (str_starts_with($mimeType, 'application/pdf')) {
                $type = 'PDF';
            } else {
                $type = 'ملف آخر';
            }
        }
       


        $fileName = time() . '_' . rand(10000, 99999) . '.' . $extension; // توليد اسم عشوائي للملف مع الاحتفاظ بالامتداد الأصلي


        $fullPath = Storage::disk($disk)->path($folderName . '/' . $fileName); // المسار الكامل على التخزين (storage path)


        Storage::disk($disk)->makeDirectory($folderName); // إنشاء المجلد إذا لم يكن موجودًا


        // قراءة الصورة وتعديل أبعادها
        if ($hight && $width) {
            $image = Image::read($uploadedFile)->resize($hight, $width);
        } else {
            $image = Image::read($uploadedFile);
        }


        $encoded = $image->encodeByMediaType(quality: 80);



        $encoded->save($fullPath);    // حفظ الصورة مباشرة بنفس الصيغة الأصلية


        return $folderName . '/' . $fileName;
    }




    public static function uploadAndCompress(UploadedFile $uploadedFile, string $folderName, string $disk, int $requiredSizeInMega): object|string
    {

        $image = Image::read($uploadedFile);   // قراءة الصورة

        $extension = strtolower($uploadedFile->getClientOriginalExtension()); // توليد اسم للملف مع الامتداد الأصلي
        $fileName = time() . '_' . rand(10000, 99999) . '.' . $extension;

        // ضغط وتكرار الحفظ حتى يقل الصافي عن 1MB
        $sizeLimit = $requiredSizeInMega * 1024 * 1024; // 1 ميجا (بالبايت)
        $quality = 90; // بدءًا من جودة عالية

 


        do {
            switch ($extension) {
                case 'jpg':
                case 'jpeg':

                    $imageData = $image->encodeByMediaType('image/jpg', quality: $quality);

                    break;
                case 'png':
                    $imageData = $image->encodeByMediaType('image/png'); // PNG لا يدعم تقليل الجودة بنفس طريقة JPG

                    break;
                case 'webp':

                    $imageData = $image->encodeByMediaType('image/webp', quality: $quality);
                    break;
                default:
                    $imageData = $image;
            }
            // @phpstan-ignore-next-line
            $size = strlen($imageData); // حجم الصورة الناتجة

            if ($size > $sizeLimit && $quality > 30) {
                $quality -= 10; // قلل الجودة كل مرة
            } else {
                break;
            }
        } while ($size > $sizeLimit);

// @phpstan-ignore-next-line
        Storage::disk($disk)->put($folderName . '/' . $fileName, $imageData); // حفظ الصورة النهائية على Storage

        return $folderName . '/' . $fileName;
    }




/**
 * @param UploadedFile[] $uploadedFiles
 * @return string[]
 */
public static function uploadsFiles(array $uploadedFiles, string $folderName, string $disk): array
{
    $attachments_file = [];

    foreach ($uploadedFiles as $file) {
        if ( $file->isValid()) {
            $ex = $file->getClientOriginalExtension();
            $filename = $folderName . time() . '_' . rand(00000, 99999) . '.' . $ex;
            $path = $file->storeAs($folderName, $filename, $disk);

            $attachments_file[] = $path;
        }
    }

   
    // @phpstan-ignore return.type
    return $attachments_file;
}
}
