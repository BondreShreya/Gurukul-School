<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('acc_type', 'admin')->first();
        $highschoolRole = Role::where('acc_type', 'highschool')->first();
        $primaryschoolRole = Role::where('acc_type', 'primaryschool')->first();
        $marathischoolRole = Role::where('acc_type', 'marathischool')->first();
        $accountantRole = Role::where('acc_type', 'accountant')->first();
        $teacherRole = Role::where('acc_type', 'teacher')->first();

        $admin = User::create([
            'parent_id' => 0,
            'name' => 'admin',
            'username' =>'admin',
            'email' => 'admin@admin.com',
            'acc_type' => 'admin',
            'password' => Hash::make('admin'),
            'password_1' => 'admin',
            'status' => '1'
        ]);
        $highschool = User::create([
            'parent_id' => 1,
            'name' => 'highschool',
            'username' =>'highschool',
            'email' => 'highschool@highschool.com',
            'acc_type' => 'highschool',
            'password' => Hash::make('highschool'),
            'password_1' => 'highschool',
            'status' => '1'
        ]);
        $primaryschool = User::create([
            'parent_id' => 2,
            'name' => 'primaryschool',
            'username' =>'primaryschool',
            'email' => 'primaryschool@primaryschool.com',
            'acc_type' => 'primaryschool',
            'password' => Hash::make('primaryschool'),
            'password_1' => 'primaryschool',
            'status' => '1'
        ]);
        $marathischool = User::create([
            'parent_id' => 3,
            'name' => 'marathischool',
            'username' =>'marathischool',
            'email' => 'marathischool@marathischool.com',
            'acc_type' => 'marathischool',
            'password' => Hash::make('marathischool'),
            'password_1' => 'marathischool',
            'status' => '1'
        ]);
        $accountant = User::create([
            'parent_id' => 4,
            'name' => 'accountant',
            'username' =>'accountant',
            'email' => 'accountant@accountant.com',
            'acc_type' => 'accountant',
            'password' => Hash::make('accountant'),
            'password_1' => 'accountant',
            'status' => '1'
        ]);
        $teacher = User::create([
            'parent_id' => 5,
            'name' => 'teacher',
            'username' =>'teacher',
            'email' => 'teacher@teacher.com',
            'acc_type' => 'teacher',
            'password' => Hash::make('teacher'),
            'password_1' => 'teacher',
            'status' => '1'
        ]);


        $admin->roles()->attach($adminRole);
        $highschool->roles()->attach($highschoolRole);
        $primaryschool->roles()->attach($primaryschoolRole);
        $marathischool->roles()->attach($marathischoolRole);
        $accountant->roles()->attach($accountantRole);
        $teacher->roles()->attach($teacherRole);
    }
}
