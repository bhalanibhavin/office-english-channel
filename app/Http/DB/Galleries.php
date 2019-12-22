<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'galleries';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'cover_id', 
                            'title', 
                            'status' ];

    public function cover() {
        return $this->hasOne('App\Http\DB\Media', 'id', 'cover_id');
    }
}
