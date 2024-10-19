<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Product_user;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run()
    {
             
        User::factory()->count(10)->create();
      
     

    }
}
