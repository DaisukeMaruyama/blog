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

    //scopeでfilterを記載。これでコントローラーでfilterを呼び出す
    public function scopeFilter($query, array $filters)
    {

        //値がフォームに入っているかみる
        $query->when(isset($filters['search']) ? $filters['search'] : false, function ($query, $search) {

            $query
            ->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%')
            ->get();

        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //定義する名前を変えても('user_id)のところで指定してあげれば問題なし
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
