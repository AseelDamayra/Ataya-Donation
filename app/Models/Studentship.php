<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Studentship extends Model
{
    protected $guarded=['id','created_at','updated_at'];
    use HasFactory;

 
    public function user()
    {
        return $this->belongsToMany(User::class)->withPivot('money','payment_id','Allname','NumberId','CVV','dateOfEnd','phone','password')->withTimestamps();;
    }
}
