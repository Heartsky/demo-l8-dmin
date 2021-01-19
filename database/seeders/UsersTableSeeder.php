<?php
namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'Admin')->first();
        $role_manager  = Role::where('name', 'Manager')->first();
        $role_st = Role::where('name', 'ST_User')->first();
        $role_tsv = Role::where('name', 'TSV_User')->first();

        $employee = new User();
        $employee->name = 'Admin User';
        $employee->email = 'admin@admin.com';
        $employee->password = bcrypt('123456');
        $employee->save();
        $employee->roles()->attach($role_admin);

        $employee = new User();
        $employee->name = 'Manager User';
        $employee->email = 'manager@manager.com';
        $employee->password = bcrypt('123456');
        $employee->save();
        $employee->roles()->attach($role_manager);

        $employee = new User();
        $employee->name = 'Son Thanh User';
        $employee->email = 'st@st.com';
        $employee->password = bcrypt('123456');
        $employee->save();
        $employee->roles()->attach($role_st);

        $employee = new User();
        $employee->name = 'Son Thanh User';
        $employee->email = 'tsv@tsv.com';
        $employee->password = bcrypt('123456');
        $employee->save();
        $employee->roles()->attach($role_tsv);
    }
}
