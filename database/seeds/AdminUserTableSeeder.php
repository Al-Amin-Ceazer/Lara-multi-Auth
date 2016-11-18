<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user  = new AdminUser();
         $user->name = "Julious Admin";
         $user->email = "admin@gmail.com";
         $user->password = crypt("123456", "");
         $user->save();
    }
}
