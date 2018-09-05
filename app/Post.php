<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'name_author'];

    public static function orderDescAuth($paginate)
    {
        return self::where('name_author', Auth::user()->name)
            ->orderby('created_at', 'desc')
            ->paginate($paginate);
    }

    public static function orderDescAll($paginate)
    {
        return self::orderBy('created_at', 'desc')
            ->paginate($paginate);
    }

    public static function getUserName()
    {
        return Auth::user()->name;
    }

    public static function checkUserRequest($name_author)
    {
        if ($name_author != Auth::user()->name) {
            exit;
        }
    }

}
