<?php

namespace App\Commands\Admin;

use Illuminate\Console\Command;
use App\Http\DB\BlogCategory;
use App\Http\DB\Common\ImageUpload;
use App\Helpers\General;

class BlogCategoryStoreCommand extends Command
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

        //Create new entry in database if operation = 'new'
        if($this->operation == 'new') {
            
            $record                     = new BlogCategory;

            $record->category_name      = $this->data['category_name'];
            $record->slug               = General::getStringToSlug($this->data['category_name']);
            $record->status             = @(isset($this->data['status']))?'1':'0';
            $record->save();

            return true;
        } else if($this->operation == 'edit') {
            
            $record                     = BlogCategory::find($this->data['id']);

            $record->category_name      = $this->data['category_name'];
            $record->slug               = General::getStringToSlug($this->data['category_name']);
            $record->status             = @(isset($this->data['status']))?'1':'0';
            $record->save();

            return true;
        } else if($this->operation == 'delete') {
            //Check for exists in other tables or not?

            //Get record and delete it.
            $record = BlogCategory::find($this->data['id']);

            $result = $record->delete();

            if($result) {
                return 'done';
            } else {
                return 'error';
            }
        }
    }
}
