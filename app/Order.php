<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $table = 'orders';

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $fillable = [
      'userid', 'mpid', 'schoolid', 'childname', 'startdate', 'prepayment', 'postpayment', 'status', 'created_at'
  ];

  public function mealpackages()
  {
      return $this->hasOne('App\MealPackage', 'id', 'mpid');
  }

  public function user()
  {
      return $this->hasOne('App\User', 'id', 'userid');
  }
}
