<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user= new User();

      $user->name="mesba";
      $user->email="mesba@gmail.com";
      $user->password= Hash::make("123456");
      $user->save();
      
    }
}
