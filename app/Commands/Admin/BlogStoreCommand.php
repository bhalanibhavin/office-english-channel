<?php

namespace App\Commands\Admin;

use Illuminate\Console\Command;
use App\Http\DB\Blog;
use App\Http\DB\Common\ImageUpload;
use App\Helpers\General;

class BlogStoreCommand extends Command
{
    public $data;
    public $request;
    public $operation = 'new';

    /**
     * @param $data
     * @param string $operation
     */

    public function __construct($data, $request, $operation = 'new') {
        $this->data = $data;
        $this->request = $request;
        $this->operation = $operation;
    }

    public function handle() {

        //Image Uploads
        if($this->operation == 'new') {
            $cover_id = '';
            
            if($this->request->hasFile('cover_image')) {
                $image_file = $this->request->file('cover_image');
                $cover_id   = ImageUpload::uploadImageAndResize("blogs", $image_file);
            }

        } else if($this->operation == 'edit') {
            $student      = Blog::find($this->data['id']);

            $cover_id   = '';

            if($this->request->hasFile('cover_image')) {
                if($student->cover_id != NULL && $student->cover_id != '') {
                    $student->cover_id = null;
                    $student->save();
                    $result = ImageUpload::removeImage($student->cover_id);
                }
                $image_file = $this->request->file('cover_image');
                $cover_id   = ImageUpload::uploadImageAndResize("blogs", $image_file);
            }   
        }
        //Create new entry in database if operation = 'new'
        if($this->operation == 'new') {
            
            $record                     = new Blog;

            $record->cover_id           = @($cover_id!='') ? ($cover_id) : null;
            $record->blog_category_id   = $this->data['blog_category_id'];
            $record->title              = $this->data['title'];
            $record->slug               = General::getStringToSlug($this->data['title']);
            $record->summary            = $this->data['summary'];
            $record->description        = $this->data['description'];
            $record->written_by         = $this->data['written_by'];
            $record->publish_date       = $this->data['publish_date'];
            $record->status             = @(isset($this->data['status']))?'1':'0';
            $record->save();

            return true;
        } else if($this->operation == 'edit') {
            
            $record                     = Blog::find($this->data['id']);

            if($this->request->hasFile('cover_image')) {
                $record->cover_id       = $cover_id;
            }
            
            $record->blog_category_id   = $this->data['blog_category_id'];
            $record->title              = $this->data['title'];
            $record->slug               = General::getStringToSlug($this->data['title']);
            $record->summary            = $this->data['summary'];
            $record->description        = $this->data['description'];
            $record->written_by         = $this->data['written_by'];
            $record->publish_date       = $this->data['publish_date'];
            $record->status             = @(isset($this->data['status']))?'1':'0';
            $record->save();

            return true;
        } else if($this->operation == 'delete') {
            //Check for exists in other tables or not?

            //Get record and delete it.
            $record = Blog::find($this->data['id']);

            if($record->cover_id != NULL && $record->cover_id != '') {
                $record->cover_id = null;
                $record->save();
                $result = ImageUpload::removeImage($record->cover_id);
            }

            $result = $record->delete();

            if($result) {
                return 'done';
            } else {
                return 'error';
            }
        }
    }
}
