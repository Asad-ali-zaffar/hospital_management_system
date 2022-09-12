<?php
namespace App\Traits;
use App\Models\Role;
use App\Models\Permission;

trait  HasPermissionTraits{
//get permissions
public function getAllPermissions($permission){
    return Permission::whereIn('slug',$permission)->get();
}
//check has permission
public function HasPermission($permission){
    return (bool) $this->permissions->where('slug',$permission->slug)->count();
}
//chek has role
public function hasRole(...$roles){
    foreach($roles as $role)
    {
        if($this->roles->contains('slug',$role))
        {
            return true;
        }
    }
    return false;
}
public function HasPermissionTo($permission){
    return $this->HasPermissionThroughRole($permission)||$this->HasPermission($permission);
}

public function HasPermissionThroughRole($permission){
    foreach($permission->roles as $role)
    {
        if($this->roles->contaions($role)){
            return true;
        }
    }
    return false;
}
//get permission
public function givePermissionTo(...$permissions){
    $permissions=$this->getAllPermissions($permissions);
    if($permissions == null){
        return $this;
    }
    $this->Permissions()->saveMany($permissions);
    return $this;
}

public function Permissions(){
    return $this->belongsTomany(Permission::class,'users_permissions');
}

public function Roles(){
    return $this->belongsTomany(Role::class,'users_roles');
}


}
