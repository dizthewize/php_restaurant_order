<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
      'name',
      'description',
      'price',
      'image'
    ];
    // Table Name
    protected $table = 'foods';

}
