<?php

namespace App\Models;


use App\Models\Payment;
// use Illuminate\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'address',
        'role_id',
      
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles(){
        return $this->belongsToMany(Role::class,'role_user');
    }

    public function comment()
    {
    	return $this->hasMany(Comment::class);
    }
    public function admin()
    {
    	return $this->belongsTo(Admin_data::class);
    }

    public function vulanteer()
    {
    	return $this->hasMany(Volunteer::class);
    }

    public function vulanteer_accepted() {
        return $this->vulanteer()->where('status', 1)->get();
    }

    public function emergencies()
    {
    	return $this->hasMany(Emergency::class);
    }

    public function smallProject()
    {
      
        return $this->belongsToMany(Small_project::class)->withPivot('money','payment_id','Allname','NumberId','CVV','dateOfEnd','phone','password')->withTimestamps();
    }

    public function payment()
    {
    	return $this->belongsToMany(Payment::class);
    }
    public function studentship()
    {
        return $this->belongsToMany(Studentship::class)->withPivot('money','payment_id','Allname','NumberId','CVV','dateOfEnd','phone','password')->withTimestamps();;
    }

   
    public function viewproduct()
    {
        return $this->belongsToMany(View_product::class,'user_view_product');
    }
    
    public function isseeker()
{
    if($this->role_id == 2)
    { 
        return true; 
    } 
    else 
    { 
        return false; 
    }
}

public function isdonar()
{
    if($this->role_id == 1)
    { 
        return true; 
    } 
    else 
    { 
          return false; 
    }
}


}