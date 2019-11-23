<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'name' => 'test',
            'email' => 'test@mail.com',
            'password' => bcrypt('@Admin123')
        ]);        
    }
}
