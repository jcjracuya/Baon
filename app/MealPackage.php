<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealPackage extends Model
{
  /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_packages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'details', 'price', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];
    
}
