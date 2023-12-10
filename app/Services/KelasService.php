<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class KelasService 
{
    public function uploadImage($image)
    {
        $image =  $image->store("sub-category/uclass");
        return $image;
    }
}