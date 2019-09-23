<?php

namespace App\Models\Role;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'id', 'name', 'description'
    ];

    protected $guarded =[];

    public function users(){
        return $this->belongsToMany( 'App\User', 'users_roles', 'role_id', 'user_id' );
    }
}
