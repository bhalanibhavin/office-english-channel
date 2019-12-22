<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'admin_email',
    						'contact_address',
                            'facebook_url',
                            'twitter_url',
                            'linkedin_url',
                            'instagram_url',
                            'youtube_url', 
                            'dribble_url', 
                            'google_plus_url' ];
}
