<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{


    public function userv(){

            return $this->hasOne(User::class,'id','id_user');
        }
}
