<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new User;
        $data->role_id = 1;
        $data->name = 'Admin';
        $data->email = 'admin@mail.com';
        $data->password = bcrypt('admin');
        $data->save();
    }
}
