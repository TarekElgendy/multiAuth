<?php

namespace App\Models;
use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $guarded = [];
    //scopes ------------------------------------------
    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {
            return $q->where('name', 'like', "%$search%");
        });
    } // end of scopeWhenSearch

    public function scopeWhereRoleNot($query, $role_name)
    {
        return $query->whereNotIn('name', (array)$role_name);
    } // end of scopeWhereRoleNot


 


}//end of model
