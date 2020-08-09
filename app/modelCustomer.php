<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelCustomer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['customer_name', 'gender', 'customer_address'];
    protected $primaryKey = 'customer_id';
}
