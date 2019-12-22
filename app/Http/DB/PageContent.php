<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'page_contents';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'about_textarea',
    						'gallery_text',
                            'contactus_text',
                            'student_text_1',
                            'student_text_2',
                            'blog_text_1',
                            'blog_text_2', 
                            'blog_detail_text_1', 
                            'blog_detail_text_2',
                            'ielts_date',
                            'ielts_time',
                            'ielts_address',
                            'ielts_contact_number',
                            'ielts_contact_email',
                            'ielts_book_seat'];
}
