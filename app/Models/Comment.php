<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // ...

    protected $fillable = [
        'user_id', 'favorite_list_id', 'content',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($comment) {
            // Additional logic if needed
        });
    }
    public function user()
{
    return $this->belongsTo(User::class);
}

public function favorite()
{
    return $this->belongsTo(Favorites::class, 'favorite_list_id');
}
}
