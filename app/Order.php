<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::creating(function($model) {
            $model->reference = uniqid();
        });
    }

    public function items()
    {
        return $this->hasMany('App\OrderItem');
    }
}
