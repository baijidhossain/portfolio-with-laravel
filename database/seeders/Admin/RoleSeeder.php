<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
 
    Role::updateOrCreate([
      'name' => 'Admin',
      'slug' => 'admin',
      'status' => true,
      'deletable' => false

    ]);

  }
}
