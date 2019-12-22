<?php

namespace App\Http\DB\Common;
use File;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;
use App\Http\DB\Media;
use App\Helpers\General;

class ImageUpload extends Model {

    public static function uploadImageAndResize($route, $image, $size = array(60, 100, 150, 300, 500)) {
        $file_name = $image->getClientOriginalName();

        $response   = ImageUpload::createDirStructure($file_name, $route);
        $full_path  = $response['full_path'];
        $file       = $response['file'];

        $result = $image->move($full_path, $file);

        if (is_array($size)) {
            foreach ($size AS $var) {
                $icon = \Image::make($full_path . $file);
                $icon->resize($var, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $filename = 'resize-' . $var . '-' . $file;
                $filename = trim($filename);
                $filename = str_replace(' ', "_", $filename);
                $icon->save($full_path . $filename);
            }
        } else {
            $icon = \Image::make($full_path . $file);
            $icon->resize($size, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $icon->save($full_path . $file);
        }

        $media = new Media;
        $media->source = $full_path . $file;
        $media->save();

        return $media->id;
    }

    public static function uploadVideoFile($route, $image) {
        $file_name = $image->getClientOriginalName();

        $response   = ImageUpload::createDirStructure($file_name, $route);
        $full_path  = $response['full_path'];
        $file       = $response['file'];

        $result = $image->move($full_path, $file);

        $media = new Media;
        $media->source = $full_path . $file;
        $media->save();

        return $media->id;
    }

    private static function createDirStructure($file_name, $route) {
        $extension = \File::extension($file_name);
        $file = date('Y-m-d_H-i-s') . '-' . md5($file_name).'.'.$extension;

        $file = trim($file);
        $file = str_replace(' ', "_", $file);
        $urlprefix = '';
        $url = \URL::to('/');
        if (strpos($url, 'localhost') != false) {
            $urlprefix = '';
        }

        $basePath = $urlprefix . "uploads/images/" . $route;

        if ( !is_dir( $basePath )) {
            mkdir( $basePath, 0777, true );
        }       
        $basePath = $basePath . '/';

        $md5 = md5($file);
        for($i = 0; $i < 5; ++$i) {
            $char = $md5[$i];
            if(!is_dir($basePath . $char)){
                mkdir($basePath . $char);
            }
            $basePath .= $char . '/';
        }

        $response = [ 'full_path'   => $basePath, 
                        'file'      => $file ];

        return $response;
    }

    public static function removeImage($media_id, $size = array(60, 100, 150, 300, 500)) {
        //try {
            $media = Media::where('id', '=', $media_id)->first();

            if(count($media) > 0) {
                $source = $media->source;

                if (is_array($size)) {
                    foreach ($size AS $var) {
                        $resize_path = General::getResizeImage($source, $var);
                        $resize_path  = public_path($resize_path);
                        $resize_path = str_replace('\public', '', $resize_path);
                        $resize_path = str_replace(env('DIVSEP'), env('DIVREP'), $resize_path);
                        \File::delete($resize_path);
                    } 
                }
                $image_url  = public_path($source);
                $image_url = str_replace('\public', '', $image_url);
                $image_url = str_replace(env('DIVSEP'), env('DIVREP'), $image_url);
                $result = \File::delete($image_url);

                $media->delete();

                return true;
            } else {
                return false;
            }
        /*} catch (Exception $e) {
            return false;
        }*/
    }

    public static function removeVideo($media_id) 
    {
        try {
        $media = Media::where('id', '=', $media_id)->first();

            if(count($media) > 0) {
                $source = $media->source;
                $image_url  = public_path($source);
                $image_url = str_replace('\public', '', $image_url);
                $result = \File::delete($image_url);

                $media->delete();
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;            
        }
    }
    
}

?>