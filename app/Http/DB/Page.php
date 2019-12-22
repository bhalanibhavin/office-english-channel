<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/* 
Predefine Values: 
status      : 1 - Active, 0 - Inactive
*/
class Page extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'create_by', 
                            'update_by', 
                            'title', 
                            'slug', 
                            'summary', 
                            'description', 
                            'meta_title', 
                            'meta_tags', 
                            'meta_description', 
                            'status' ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function postCategory() {
        return $this->hasOne('App\Http\DB\PostCategory', 'id', 'post_category_id');
    }

    public function cover() {
        return $this->hasOne('App\Http\DB\Common\Media', 'id', 'cover_id');
    }

}
