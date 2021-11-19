<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_data extends Model
{
    protected $guarded=['admin_id','created_at','updated_at'];
    use HasFactory;
}
