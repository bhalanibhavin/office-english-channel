<?php 

namespace App\Helpers;

class General
{
    public static function getStringToSlug($string = '') {
        $string = strtolower($string);
        $string = preg_replace('/[^\w\d\-\ ]/', '', $string);
        $string = str_replace(' ', '-', $string);
        return preg_replace('/\-{2,}/', '-', $string);
    }

    public static function getResizeImage($path, $size = '100') {
        $arr = explode("/", $path);

        $file_name = $arr[ count($arr) - 1 ];
        $file_name = 'resize-'.$size.'-'.$file_name;

        $arr[ count($arr) - 1 ] = $file_name;
        $new_path = implode("/", $arr);

        return $new_path;
    }

}


?>