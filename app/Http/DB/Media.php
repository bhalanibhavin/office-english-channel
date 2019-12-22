<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'medias';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'source' ];

}
