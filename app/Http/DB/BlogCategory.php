<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'cover_id', 
                            'category_name', 
                            'slug', 
                            'summary' ];

    public function cover() {
        return $this->hasOne('App\Http\DB\Media', 'id', 'cover_id');
    }
}
