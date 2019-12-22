<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'first_name', 
                            'last_name', 
                            'email', 
                            'password' ];


    
}
