<?php

namespace Database\Seeders;

use App\Models\Admin_data;
use Illuminate\Database\Seeder;

class admin_dataseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin_data::create([
            'name'=>'اسيل',
            'email'=>'Aseel@gmail.com',
            'password'=>'123456',
            'mobile'=>'123456',
            'image'=>'2.jpg',

         ]);

         Admin_data::create([
            'name'=>'نسمة',
            'email'=>'nisma@gmail.com',
            'password'=>'123456',
            'mobile'=>'123456',
            'image'=>'1.jpg',
            
         ]);
         Admin_data::create([
            'name'=>'اسلام',
            'email'=>'Aseel@gmail.com',
            'password'=>'123456',
            'mobile'=>'123456',
            'image'=>'3.jpg',
            
         ]);
         Admin_data::create([
            'name'=>'هديل',
            'email'=>'Aseel@gmail.com',
            'password'=>'123456',
            'mobile'=>'123456',
            'image'=>'4.jpg',
            
         ]);
    }
}
