<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Sentinel;
use App\Http\DB\PageContent;

class PageContentComposer
{
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $contact_details = [ 'about_textarea' => '', 'gallery_text' => '', 'contactus_text' => '', 'student_text_1' => '', 'student_text_2' => '', 'blog_text_1' => '', 'blog_text_2' => '', 'blog_detail_text_1' => '', 'blog_detail_text_2' => '', 'ielts_date' => '', 'ielts_time' => '', 'ielts_address' => '', 'ielts_contact_number' => '', 'ielts_contact_email' => '', 'ielts_book_seat' => '' ];
        
        try {
            $page_content = PageContent::first();

            if(count($page_content) > 0) {
                $contact_details['about_textarea']      = $page_content->about_textarea;
                $contact_details['gallery_text']       = $page_content->gallery_text;
                $contact_details['contactus_text']      = $page_content->contactus_text;
                $contact_details['student_text_1']   = $page_content->student_text_1;
                $contact_details['student_text_2']       = $page_content->student_text_2;
                $contact_details['blog_text_1']       = $page_content->blog_text_1;
                $contact_details['blog_text_2']       = $page_content->blog_text_2;
                $contact_details['blog_detail_text_1']       = $page_content->blog_detail_text_1;
                $contact_details['blog_detail_text_2']       = $page_content->blog_detail_text_2;
                $contact_details['ielts_date']       = $page_content->ielts_date;
                $contact_details['ielts_time']       = $page_content->ielts_time;
                $contact_details['ielts_address']       = $page_content->ielts_address;
                $contact_details['ielts_contact_number']       = $page_content->ielts_contact_number;
                $contact_details['ielts_contact_email']       = $page_content->ielts_contact_email;
                $contact_details['ielts_book_seat']       = $page_content->ielts_book_seat;
            }
            
        } catch (Exception $e) {
            
        }

        $view->with('page_content', $page_content);
    }
}