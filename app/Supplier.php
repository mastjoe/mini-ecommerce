<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
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

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
