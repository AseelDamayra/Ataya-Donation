<?php

namespace App\Models;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    protected $fillable=['comment','blog_id','user_id'];
    use HasFactory;

    
    public function blog()
    {
    	return $this->belongsTo(Blog::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
