<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class paymentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'name'=>'Visa',  
         ]);

         Payment::create([
            'name'=>'Paypal',  
         ]);
    }
}
