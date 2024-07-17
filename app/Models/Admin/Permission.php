<?php


namespace App\Models\Admin;
use App\Models\Admin\Module;
use App\Models\Admin\Role;


use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    protected $guarded=['id'];

    public function module(){

        return $this->belongsTo(Module::class);
    }

    public function roles(){

     return $this->belongsToMany(Role::class);

    }
}
