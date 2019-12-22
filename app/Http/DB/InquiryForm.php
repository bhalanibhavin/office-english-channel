<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class InquiryForm extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inquiry_forms';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'first_name',
    						'subject',
    						'comments',
    						'email' ];
}
