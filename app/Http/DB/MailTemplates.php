<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class MailTemplates extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mail_templates';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'mail_type', 
                            'subject', 
                            'description', 
                            'mail_tags', 
                            'send_to_cc', 
                            'cc_list', 
                            'send_to_bcc', 
                            'bcc_list', 
                            'status', 
                            'send_to_admin' ];

}
