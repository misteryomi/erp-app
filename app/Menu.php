<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Menu extends Model
{
    protected $guarded = [];

    public function children() {
        return $this->where('parent_id', $this->id)->get();
    }

    public function parent() {
        return $this->hasOne(Menu::class, 'id', 'parent_id');
    }

    public function hasChildren() {
        return $this->children()->count() > 0;
    }

    public function roles() {
        return $this->hasManyThrough(Role::class, MenuRole::class, 'menu_id', 'id', 'id', 'role_id');
    }

    public function permissions() {
        return $this->hasManyThrough(Permission::class, MenuPermission::class, 'menu_id', 'id', 'id', 'permission_id');
    }

    public function menu_roles() {
        return $this->hasMany(MenuRole::class, 'menu_id');
    }

    public function menu_permissions() {
        return $this->hasMany(MenuPermission::class, 'menu_id');
    }


    // public function permissions() {
    //     return $this->morphMany(MenuPermission::class, 'permission');
    // }

    public function isActivePage() {
        $current_route = \Request::route()->getName();

        if($current_route == $this->route) return true;

        $children_routes = $this->children()->pluck('route')->toArray();

        if(in_array($current_route, $children_routes)) return true;

        return false;
    }


    public function canViewRoute() {
        return $this->roleCanViewRoute() || $this->permissionCanViewRoute() ||  ($this->roles->count() == 0 &&  $this->permissions->count() == 0);
    }

    /**
     * if normal user or has the role
     */
    public function roleCanViewRoute() {
        // var_dump(auth()->user()->hasAnyRole($this->roles->pluck('name')->toArray()));
        return auth()->user()->hasAnyRole($this->roles->pluck('name')->toArray());
    }


    /**
     * if normal user or has the permission
     */
    public function permissionCanViewRoute() {
        // $this->permissions->count() == 0 ||
        return auth()->user()->hasAnyPermission($this->permissions->pluck('name')->toArray());
    }


}
