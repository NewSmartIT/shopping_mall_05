<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $guarded = [];

    public function values()
    {
        return $this->hasMany(Value::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
