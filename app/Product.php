<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['imagePath','title','description','price'];
    //public $timestamps = false;
}
