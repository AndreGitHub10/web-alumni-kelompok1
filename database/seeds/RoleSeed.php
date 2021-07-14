<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
