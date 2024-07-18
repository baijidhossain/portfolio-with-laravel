<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\Module;
use App\Models\Admin\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $moduleAppDashboard = Module::updateOrCreate([

      'name' => 'Admin Dashboard',

    ]);

    Permission::updateOrCreate([

      'module_id' => $moduleAppDashboard->id,
      'name' => 'Accese Dashboard',
      'slug' => 'app.dashboard'
    ]);

    $blog_management = Module::updateOrCreate(['name' => 'Blog Management']);
    Permission::updateOrCreate([
      'module_id' => $blog_management->id,
      'name' => 'Access Blog',
      'slug' => 'admin.blog.index'

    ]);

    Permission::updateOrCreate([
      'module_id' => $blog_management->id,
      'name' => 'Blog Add',
      'slug' => 'admin.blog.add'

    ]);

    Permission::updateOrCreate([
      'module_id' => $blog_management->id,
      'name' => 'Blog Edit',
      'slug' => 'admin.blog.edit'

    ]);

    Permission::updateOrCreate([
      'module_id' => $blog_management->id,
      'name' => 'Blog Delete',
      'slug' => 'admin.blog.delete'

    ]);
  }
}
