<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = new Role;
        $data->name = 'Admin';
        $data->save();
        $data2 = new Role;
        $data2->name = 'User';
        $data2->save();

        $data = new User;
        $data->role_id = 1;
        $data->name = 'Admin';
        $data->email = 'admin@mail.com';
        $data->password = bcrypt('admin');
        $data->save();
    }
}
