<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'excerpt',
        'body',
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    //定義する名前を変えても('user_id)のところで指定してあげれば問題なし
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
