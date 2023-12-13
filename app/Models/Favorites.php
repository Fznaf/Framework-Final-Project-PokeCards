<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    protected $table = 'favorite_list';

    protected $fillable = [
        'userid',
        'cardid',
        'cardname',
        'image',
    ];
public function comments()
{
    return $this->hasMany(Comment::class, 'favorite_list_id', 'id');
}


}
