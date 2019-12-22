<?php

namespace App\Commands\Admin\General;

use Illuminate\Console\Command;
use App\Http\DB\Page;

class PageStoreCommand extends Command
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

            $record                     = new Page;

            $record->create_by          = $this->data['create_by'];
            // $record->post_category_id   = $this->data['post_category_id'];
            $record->title              = $this->data['title'];
            $record->slug               = $this->data['slug'];
            $record->description        = $this->data['description'];
            $record->meta_title         = $this->data['meta_title'];
            $record->meta_tags          = $this->data['meta_tags'];
            $record->meta_description   = $this->data['meta_description'];
            // $record->newsletter_status  = $this->data['newsletter_status'];
            // $record->register_status    = $this->data['register_status'];
            // $record->contact_status     = $this->data['contact_status'];
            $record->status             = $this->data['status'];
            $record->save();

            return true;
        } else if($this->operation == 'edit') {
            
            $record                     = Page::find($this->data['id']);
            
            $record->update_by          = $this->data['update_by'];
            // $record->post_category_id   = $this->data['post_category_id'];
            $record->title              = $this->data['title'];
            $record->slug               = $this->data['slug'];
            $record->description        = $this->data['description'];
            $record->meta_title         = $this->data['meta_title'];
            $record->meta_tags          = $this->data['meta_tags'];
            $record->meta_description   = $this->data['meta_description'];
            // $record->newsletter_status  = $this->data['newsletter_status'];
            // $record->register_status    = $this->data['register_status'];
            // $record->contact_status     = $this->data['contact_status'];
            $record->status             = $this->data['status'];
            $record->save();

            return true;
        } else if($this->operation == 'delete') {
            //Check for exists in other tables or not?

            //Get record and delete it.
            $record = Page::find($this->data['id']);
            $result = $record->delete();

            if($result) {
                return 'done';
            } else {
                return 'error';
            }
        }
    }
}
