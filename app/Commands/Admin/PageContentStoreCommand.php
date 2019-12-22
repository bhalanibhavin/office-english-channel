<?php

namespace App\Commands\Admin;

use Illuminate\Console\Command;
use App\Http\DB\PageContent;

class PageContentStoreCommand extends Command
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
        if($this->operation == 'edit') {
            
            $record                         = PageContent::find($this->data['id']);

            $record->about_textarea       = $this->data['about_textarea'];
            $record->gallery_text         = $this->data['gallery_text'];
            $record->contactus_text       = $this->data['contactus_text'];
            $record->student_text_1       = $this->data['student_text_1'];
            $record->student_text_2       = $this->data['student_text_2'];
            $record->blog_text_1          = $this->data['blog_text_1'];
            $record->blog_text_2          = $this->data['blog_text_2'];
            $record->blog_detail_text_1   = $this->data['blog_detail_text_1'];
            $record->blog_detail_text_2   = $this->data['blog_detail_text_2'];
            $record->ielts_date           = $this->data['ielts_date'];
            $record->ielts_time           = $this->data['ielts_time'];
            $record->ielts_address        = $this->data['ielts_address'];
            $record->ielts_contact_number = $this->data['ielts_contact_number'];
            $record->ielts_contact_email  = $this->data['ielts_contact_email'];
            $record->ielts_book_seat      = $this->data['ielts_book_seat'];
            $record->save();

            return true;
        } 
    }
}
