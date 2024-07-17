<?php

namespace App\Models\Admin;
use App\Models\Admin\Module;
use App\Models\Admin\Permission;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $guarded=['id'];

public function permissions(){

  return $this->belongsToMany(Permission::class);

}

public function users(){

    return $this->hasMany(User::class);
}

}
