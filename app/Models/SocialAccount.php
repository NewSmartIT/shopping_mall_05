<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected $fillable = [
        'social_id',
        'social_type',
        'customer_id',
    ];

    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
