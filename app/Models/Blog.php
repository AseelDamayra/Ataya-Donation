<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    protected $guarded=['id','created_at','updated_at'];

    use HasFactory;
    
    public function comment()
    {
    	return $this->hasMany(Comment::class);
    }
}
