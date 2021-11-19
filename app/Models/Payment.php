<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    protected $guarded=['id','created_at','updated_at'];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function smallproject()
    {
    	return $this->belongsTo(Small_project::class);
    }
    use HasFactory;
}
