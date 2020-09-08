<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::creating(function($model) {
            $model->reference = uniqid();
            $model->user_id = Auth::user()->id;
        });
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function order_items()
    {
        return $this->hasMany('App\Order');
    }
}
