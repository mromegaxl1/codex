<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    //

    use SoftDeletes;



    protected $table = 'users';



    public function rolv(){
    // return $this->belongsTo(User::class,'id_user');
        return $this->hasOne(Role::class,'id','id_role');
    }
}
