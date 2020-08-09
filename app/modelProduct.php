<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelProduct extends Model
{
    protected $table = 'product';
    protected $fillable = ['product_name', 'product_description', 'product_image'];
    protected $primaryKey = 'product_id';
}
