<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'blog_id', 'name', 'email', 'usercomment',
    ];

    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }
 }
