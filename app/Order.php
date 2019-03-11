<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function addressShipping()
    {
        return $this->belongsTo('App\Address', 'address_shipping_id');
    }

    public function addressDelivery()
    {
        return $this->belongsTo('App\Address','address_delivery_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}

