<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\DB\Common\ImageUpload;

class CommonController extends Controller
{
    public function postImageRemove(Request $request) {
        try {
            $data = $request->all();

            // echo"<pre>";
            // print_r($data);

            $media_id       = $data['media_id'];
            $base_table     = $data['base_table'];
            $base_column    = $data['base_column'];
            $base_value     = $data['base_value'];

            if($media_id != '') {
                //Make column value null in table
                \DB::table($base_table)
                    ->where('id', $base_value)
                    ->update([$base_column => null]);

                $result = ImageUpload::removeImage($media_id);

                if($result) {
                    return response()->json([
                        'remove-image'          => true,
                        'reqstatus'             => 'done'
                    ]);            
                } else {
                    return response()->json([
                        'remove-image'          => true,
                        'reqstatus'             => 'error', 
                        'reqmessage'            => \Lang::get('admin/common/index.invalid_input_image_err')
                    ]);            
                }
            } else {
                return response()->json([
                    'remove-image'          => true,
                    'reqstatus'             => 'error', 
                    'reqmessage'            => \Lang::get('admin/common/index.blank_media_id_msg')
                ]);            
            }

        } catch (Exception $e) {
            return response()->json([
                'remove-image'          => true,
                'reqstatus'             => 'error', 
                'reqmessage'            => \Lang::get('admin/common/index.image_remove_unexpected_err_msg')
            ]);            
        }
    }
}
