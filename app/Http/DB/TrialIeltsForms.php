<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class TrialIeltsForms extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trial_ielts_forms';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'full_name', 
                            'email', 
                            'contact_number', 
                            'module', 
                            'test_date', 
                            'exposure', 
                            'exam_date', 
                            'reason_choosing_ielts_ans', 
                            'payment_detail_contact' ];

}
