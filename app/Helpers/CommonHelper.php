<?php
namespace App\Helpers;
use File;

class CommonHelper
{
    public static function getContentFile($part, $content = ''){

        if(!empty($content)){
            File::put($part,$content);
        }
        $content = File::get($part,$content);
        return $content;
    }
}