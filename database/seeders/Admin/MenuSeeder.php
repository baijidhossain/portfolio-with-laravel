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

    $backendsidebar = Menu::UpdateOrCreate([

      'name' => 'backend-sidebar',
      'description' => 'This is backend sidebar',
      'deletable' => false,
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'divider',
      'order' => 1,
      'divider_title' => 'Control Panel',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 2,
      'title' => 'Dashboard',
      'url' => '/app/dashboard',
      'icon_class' => 'metismenu-icon fas fa-tachometer-alt',
    ]);



    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'divider',
      'order' => 3,
      'divider_title' => 'Website Setup',

    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 4,
      'title' => 'Pages',
      'url' => '/app/pages',
      'icon_class' => 'metismenu-icon fas fa-file',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 5,
      'title' => 'Layout',
      'url' => '/app/layout',
      'icon_class' => 'metismenu-icon fas fa-table',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 6,
      'title' => 'File Manager',
      'url' => '/app/file',
      'icon_class' => 'metismenu-icon fas fa-folder',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 7,
      'title' => 'Theme',
      'url' => '/app/theme',
      'icon_class' => 'metismenu-icon fas fa-code',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 8,
      'title' => 'Content Types',
      'url' => '/app/content_type',
      'icon_class' => 'metismenu-icon fas fa-layer-group',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 9,
      'title' => 'Dynamic Content',
      'url' => '/app/dynamic_content',
      'icon_class' => 'metismenu-icon fas fa-book ',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 10,
      'title' => 'Social Media Link',
      'url' => '/app/social',
      'icon_class' => 'metismenu-icon fa fa-share-nodes',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 11,
      'title' => 'Slider',
      'url' => '/app/slider',
      'icon_class' => 'metismenu-icon  fa-solid fa-sliders',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'divider',
      'order' => 12,
      'divider_title' => 'Administration',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 13,
      'title' => 'Roles',
      'url' => '/app/roles',
      'icon_class' => 'metismenu-icon fas fa-project-diagram',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 14,
      'title' => 'Users',
      'url' => '/app/users',
      'icon_class' => 'metismenu-icon fas fa-users',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 15,
      'title' => 'Navigation',
      'url' => '/app/menus',
      'icon_class' => 'metismenu-icon fas fa-bars',
    ]);

    $backendsidebar->menuItems()->UpdateOrCreate([
      'menu_id' => $backendsidebar->id,
      'type' => 'item',
      'order' => 16,
      'title' => 'Settings',
      'url' => '/app/settings/general',
      'icon_class' => 'metismenu-icon fas fa-cog',
    ]);

  }
}
