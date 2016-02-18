<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lname', 'fname', 'username', 'email', 'password', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
