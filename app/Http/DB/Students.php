<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'students';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'cover_id', 
                            'first_name', 
                            'last_name', 
                            'slug', 
                            'course', 
                            'status', 
                            'summary' ];

    public function cover() {
        return $this->hasOne('App\Http\DB\Media', 'id', 'cover_id');
    }
}
