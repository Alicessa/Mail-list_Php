<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='Users';
    protected $fillable=[];//白名单
    protected $guarded=[];
    public $timestamps=false;
    //
}
