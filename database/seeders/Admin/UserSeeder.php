<?php
namespace Database\Seeders\Admin;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin\User;
use App\Models\Admin\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name' => 'Admin User',
            'role_id'=>Role::where('slug','admin')->first()->id,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminadmin'),
        ]);

    }
}
