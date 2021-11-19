<?php

namespace App\Models;

use App\Models\Payment;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Small_project extends Model
{

    protected $guarded=['id','created_at','updated_at'];
    use HasFactory;

  
    public function user(){
        return $this->belongsToMany(User::class)->withPivot('money','payment_id','Allname','NumberId','CVV','dateOfEnd','phone','password')->withTimestamps();;
    }

    public function payment()
    {
    	return $this->hasMany(Payment::class);
    }
}
