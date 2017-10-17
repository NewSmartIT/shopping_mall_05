<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'title',
        'comment',
        'user_id',
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
