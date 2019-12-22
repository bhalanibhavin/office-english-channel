<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'cover_id', 
                            'blog_category_id', 
                            'title', 
                            'slug', 
                            'description', 
                            'summary' ];

    public function cover() {
        return $this->hasOne('App\Http\DB\Media', 'id', 'cover_id');
    }
}
