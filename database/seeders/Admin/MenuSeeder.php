<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\menu;
use App\Models\Admin\MenuItem;
use Illuminate\Database\Seeder;


class MenuSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $backend_sidebar = Menu::updateOrCreate([
      'name' => 'backend-sidebar',
      'description' => 'This is backend sidebar',
      'deletable' => false,
    ]);

    $backend_sidebar->menuItems()->updateOrCreate([
      'menu_id' => $backend_sidebar->id,
      'type' => 'item',
      'order' => 2,
      'title' => 'Dashboard',
      'url' => '/admin/dashboard',
      'icon' => 'fa fa-dashboard',
    ]);

    $blog = MenuItem::Create([
      'menu_id' => $backend_sidebar->id,
      'type' => 'item',
      'parent_id' => 0,
      'order' => 2,
      'title' => 'Blogs',
      'url' => 'javascript:void(0)',
      'icon' => 'fa-solid fa-calendar-days',
    ]);

    MenuItem::create([
      'menu_id' => $backend_sidebar->id,
      'type' => 'item',
      'parent_id' => $blog->id,
      'order' => 2,
      'title' => 'Blog List',
      'url' => '/admin/blog/',
      'icon' => 'fa-solid fa-calendar-days',
    ]);

    MenuItem::create([
      'menu_id' => $backend_sidebar->id,
      'type' => 'item',
      'parent_id' => $blog->id,
      'order' => 2,
      'title' => 'Blog Add',
      'url' => '/admin/blog/add',
      'icon' => 'fa-solid fa-calendar-days',
    ]);
  }
}
