<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class Order extends Model
{

    protected $fillable = [
      'user_id',
      'user_name',
      'total',
      'delivered'
    ];

    protected $table = 'orders';

    public function user()
    {
      $this->belongsTo(User::class);
    }

    public function orderItems()
    {
      return $this->belongsToMany('App\Food')->withPivot('qty', 'total');
    }

}
