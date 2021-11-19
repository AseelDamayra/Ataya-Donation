<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class View_product extends Model
{
    protected $guarded=['id','created_at','updated_at'];
    use HasFactory;

   

    public function user()
    {
        return $this->belongsToMany(User::class,'user_view_product');
    }
}
