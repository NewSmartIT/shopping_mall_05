<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'account',
        'password',
        'fullname',
        'email',
        'dob',
        'gender',
        'address',
        'job',
        'phone_number',
        'status',
    ];

    protected $guarded = [];

    public function socialAccounts()
    {
        return $this->hasMany(SocialAccount::class);
    }

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
