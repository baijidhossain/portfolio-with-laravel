<?php

namespace App\Models\Admin;
use App\models\Admin\Permission;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    // protected $guarded=['id'];
    public function permission(){

        return $this->hasMany(Permission::class,'module_id','id');

    }
}
