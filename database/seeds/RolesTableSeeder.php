<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['acc_type' => 'admin']);
        Role::create(['acc_type' => 'highschool']);
        Role::create(['acc_type' => 'primaryschool']);
        Role::create(['acc_type' => 'marathischool']);
        Role::create(['acc_type' => 'accountant']);
        Role::create(['acc_type' => 'teacher']);
    }
}
