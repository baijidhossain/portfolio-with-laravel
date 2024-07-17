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

    $moduleapprule = Module::updateOrCreate(['name' => 'Role Management']);
    Permission::updateOrCreate([
      'module_id' => $moduleapprule->id,
      'name' => 'Access Role',
      'slug' => 'app.roles.index'

    ]);

    Permission::updateOrCreate([
      'module_id' => $moduleapprule->id,
      'name' => 'Create Role',
      'slug' => 'app.roles.create'

    ]);


    Permission::updateOrCreate([
      'module_id' => $moduleapprule->id,
      'name' => 'Edit Role',
      'slug' => 'app.roles.edit'
    ]);

    Permission::updateOrCreate([
      'module_id' => $moduleapprule->id,
      'name' => 'Delete Role',
      'slug' => 'app.roles.delete'

    ]);

    Permission::updateOrCreate([
      'module_id' => $moduleapprule->id,
      'name' => 'Role Satus Change',
      'slug' => 'app.roles.statusChange'
    ]);

    Permission::updateOrCreate([
      'module_id' => $moduleapprule->id,
      'name' => 'Role Role Permission Access',
      'slug' => 'app.roles.permission'
    ]);


// user
    $moduleAppUser = Module::updateOrCreate(['name' => 'User Management']);

    Permission::updateOrCreate([
      'module_id' => $moduleAppUser->id,
      'name' => 'Access User',
      'slug' => 'app.Users.index'

    ]);

    Permission::updateOrCreate([
      'module_id' => $moduleAppUser->id,
      'name' => 'Create User',
      'slug' => 'app.Users.create'

    ]);


    Permission::updateOrCreate([
      'module_id' => $moduleAppUser->id,
      'name' => 'Edit User',
      'slug' => 'app.Users.edit'

    ]);

    Permission::updateOrCreate([
      'module_id' => $moduleAppUser->id,
      'name' => 'Delete User',
      'slug' => 'app.Users.destroy'

    ]);




    //page

    $moduleappPage = Module::updateOrCreate(['name' => 'Page Management']);
    Permission::updateOrCreate([
      'module_id' => $moduleappPage->id,
      'name' => 'Access Pages',
      'slug' => 'app.pages.index'

    ]);

    Permission::updateOrCreate([
      'module_id' => $moduleappPage->id,
      'name' => 'Create Page',
      'slug' => 'app.pages.create'

    ]);


    Permission::updateOrCreate([
      'module_id' => $moduleappPage->id,
      'name' => 'Edit Page',
      'slug' => 'app.pages.edit'

    ]);



    Permission::updateOrCreate([
      'module_id' => $moduleappPage->id,
      'name' => 'Delete Page',
      'slug' => 'app.pages.delete'

    ]);

    Permission::updateOrCreate([
      'module_id' => $moduleappPage->id,
      'name' => 'Page Status Update',
      'slug' => 'app.pages.statusChange'

    ]);


    //menubuilders

    $moduleappPage = Module::updateOrCreate(['name' => 'Menu Builder Management']);
    Permission::updateOrCreate([
      'module_id' => $moduleappPage->id,
      'name' => 'Access Menu builder',
      'slug' => 'app.menus.builder'

    ]);

    //menus  

    $moduleappMenu = Module::updateOrCreate(['name' => 'Menu Management']);
    Permission::updateOrCreate([
      'module_id' => $moduleappMenu->id,
      'name' => 'Access menus',
      'slug' => 'app.menus.index'

    ]);

    Permission::updateOrCreate([
      'module_id' => $moduleappMenu->id,
      'name' => 'Create Menu',
      'slug' => 'app.menus.create'

    ]);


    Permission::updateOrCreate([
      'module_id' => $moduleappMenu->id,
      'name' => 'Edit Menu',
      'slug' => 'app.menus.edit'

    ]);

    Permission::updateOrCreate([
      'module_id' => $moduleappMenu->id,
      'name' => 'Delete Menu',
      'slug' => 'app.menus.destroy'

    ]);





    //settings

    $moduleappSetings = Module::updateOrCreate(['name' => 'Application Settings Management']);
    Permission::updateOrCreate([
      'module_id' => $moduleappSetings->id,
      'name' => 'settings General ',
      'slug' => 'app.settings.general'

    ]);
    Permission::updateOrCreate([
      'module_id' => $moduleappSetings->id,
      'name' => 'General settings update',
      'slug' => 'app.settings.general.update'

    ]);
    Permission::updateOrCreate([
      'module_id' => $moduleappSetings->id,
      'name' => 'appearance settings',
      'slug' => 'app.settings.appearance'

    ]);

    Permission::updateOrCreate([
      'module_id' => $moduleappSetings->id,
      'name' => 'Favicon icon',
      'slug' => 'app.settings.faviconicon.update'

    ]);

    //end settings


    Permission::updateOrCreate([
      'module_id' => $moduleappSetings->id,
      'name' => 'Layout Update',
      'slug' => 'app.layout.update'

    ]);


    // Social link management
    $socialMedia = Module::updateOrCreate(['name' => 'Social Media Link Management']);

    Permission::updateOrCreate([
      'module_id' => $socialMedia->id,
      'name' => 'View All social Link',
      'slug' => 'app.social.index'
    ]);


    Permission::updateOrCreate([
      'module_id' => $socialMedia->id,
      'name' => 'Add New Social Media Link ',
      'slug' => 'app.social.add'
    ]);

    Permission::updateOrCreate([
      'module_id' => $socialMedia->id,
      'name' => 'Edit Social Media Link',
      'slug' => 'app.social.edit'
    ]);

    Permission::updateOrCreate([
      'module_id' => $socialMedia->id,
      'name' => 'Delete Social Media Link ',
      'slug' => 'app.social.delete'
    ]);

    Permission::updateOrCreate([
      'module_id' => $socialMedia->id,
      'name' => 'Status Update',
      'slug' => 'app.social.statusChange'
    ]);


    // Slider Management
    $slider = Module::updateOrCreate(['name' => 'Slider Management']);

    Permission::updateOrCreate([
      'module_id' => $slider->id,
      'name' => 'View All Slider',
      'slug' => 'app.slider.index'
    ]);


    Permission::updateOrCreate([
      'module_id' => $slider->id,
      'name' => 'Add New Slider',
      'slug' => 'app.slider.add'
    ]);

    Permission::updateOrCreate([
      'module_id' => $slider->id,
      'name' => 'Edit Slider',
      'slug' => 'app.slider.edit'
    ]);

    Permission::updateOrCreate([
      'module_id' => $slider->id,
      'name' => 'Delete Slider',
      'slug' => 'app.slider.delete'
    ]);

    Permission::updateOrCreate([
      'module_id' => $slider->id,
      'name' => 'Order Update',
      'slug' => 'app.slider.order'
    ]);

    Permission::updateOrCreate([
      'module_id' => $slider->id,
      'name' => 'Status Update ',
      'slug' => 'app.slider.statusChange'
    ]);

    Permission::updateOrCreate([
      'module_id' => $slider->id,
      'name' => 'Slider Item Status Change',
      'slug' => 'app.slider.sliderItemStatusChange'
    ]);

    // Layout Management
    $layout = Module::updateOrCreate(['name' => 'Layout Management']);

    Permission::updateOrCreate([
      'module_id' => $layout->id,
      'name' => 'View Access All Layout',
      'slug' => 'app.layout.index'
    ]);


    Permission::updateOrCreate([
      'module_id' => $layout->id,
      'name' => 'Add New Layout',
      'slug' => 'app.layout.add'
    ]);

    Permission::updateOrCreate([
      'module_id' => $layout->id,
      'name' => 'Edit Layout',
      'slug' => 'app.layout.edit'
    ]);

    Permission::updateOrCreate([
      'module_id' => $layout->id,
      'name' => 'Delete Layout',
      'slug' => 'app.layout.delete'
    ]);

    Permission::updateOrCreate([
      'module_id' => $layout->id,
      'name' => 'Status Update ',
      'slug' => 'app.layout.changeStatus'
    ]);


    // File Manager Management
    $filemanager = Module::updateOrCreate(['name' => 'File Manager Management']);

    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => 'View Access All File',
      'slug' => 'app.filemanager.index'
    ]);


    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => 'Download File',
      'slug' => 'app.filemanager.download'
    ]);

    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => 'Upload File',
      'slug' => 'app.filemanager.upload'
    ]);

    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => 'Delete File',
      'slug' => 'app.filemanager.delete'
    ]);

    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => 'Folder and File Management',
      'slug' => 'app.filemanager.folder'
    ]);

    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => " Modal Use for Folder and File Access",
      'slug' => 'app.filemanager.modal'
    ]);



    // Website Theme Management
    $filemanager = Module::updateOrCreate(['name' => 'Website Theme Management']);

    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => 'View Access All File',
      'slug' => 'app.theme.index'
    ]);


    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => 'Download File',
      'slug' => 'app.theme.download'
    ]);

    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => 'Upload File',
      'slug' => 'app.theme.upload'
    ]);

    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => 'Delete File',
      'slug' => 'app.theme.delete'
    ]);

    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => 'Folder and File Management',
      'slug' => 'app.theme.folder'
    ]);

    Permission::updateOrCreate([
      'module_id' => $filemanager->id,
      'name' => " Modal Use for Folder and File Access",
      'slug' => 'app.theme.modal'
    ]);



// Content Type

$contentType = Module::updateOrCreate(['name' => 'Content Type Management']);

Permission::updateOrCreate([
  'module_id' => $contentType->id,
  'name' => 'View Access',
  'slug' => 'app.contentType.index'
]);

Permission::updateOrCreate([
  'module_id' => $contentType->id,
  'name' => 'Content Type Add',
  'slug' => 'app.contentType.add'
]);

Permission::updateOrCreate([
  'module_id' => $contentType->id,
  'name' => 'Content Type Edit',
  'slug' => 'app.contentType.edit'
]);

Permission::updateOrCreate([
  'module_id' => $contentType->id,
  'name' => 'Content Type Delete',
  'slug' => 'app.contentType.delete'
]);





// Dynamic content

$dynamicContnet = Module::updateOrCreate(['name' => 'Dynamic Content Management']);

Permission::updateOrCreate([
  'module_id' => $dynamicContnet->id,
  'name' => 'Dynamic Content View Access',
  'slug' => 'app.dynamicContent.index'
]);

Permission::updateOrCreate([
  'module_id' => $dynamicContnet->id,
  'name' => 'Dynamic Content Add',
  'slug' => 'app.dynamicContent.add'
]);

Permission::updateOrCreate([
  'module_id' => $dynamicContnet->id,
  'name' => 'Dynamic Content Edit',
  'slug' => 'app.dynamicContent.edit'
]);


Permission::updateOrCreate([
  'module_id' => $dynamicContnet->id,
  'name' => 'Dynamic Content Delete',
  'slug' => 'app.dynamicContent.delete'
]);


Permission::updateOrCreate([
  'module_id' => $dynamicContnet->id,
  'name' => 'Dynamic Content Add Item',
  'slug' => 'app.dynamicContent.additem'
]);

Permission::updateOrCreate([
  'module_id' => $dynamicContnet->id,
  'name' => 'Dynamic Content Edit Item',
  'slug' => 'app.dynamicContent.edititem'
]);

Permission::updateOrCreate([
  'module_id' => $dynamicContnet->id,
  'name' => 'Dynamic Content Delete Item',
  'slug' => 'app.dynamicContent.deleteitem'
]);

Permission::updateOrCreate([
  'module_id' => $dynamicContnet->id,
  'name' => 'Dynamic Content Item Sortable',
  'slug' => 'app.dynamicContent.storeitem'
]);


Permission::updateOrCreate([
  'module_id' => $dynamicContnet->id,
  'name' => 'Dynamic Content and Item Status Change',
  'slug' => 'app.dynamicContent.statusChange'
]);


  }
}
