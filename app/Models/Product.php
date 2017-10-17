<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'brand_id',
        'date',
        'price',
        'special',
        'description',
        'status',
        'guarantee',
        'promotion',
        'rate',
        'number_customer',
    ];

    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Atribute::class);
    }

    public function bills()
    {
        return $this->belongsToMany(Bill::class);
    }
}
