<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compose extends Model
{
    protected $guarded=['id','sendtime'];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public $timestamps = false;
}
