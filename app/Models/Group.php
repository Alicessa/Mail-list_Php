<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\UserRequest;
use App\Models\Group;

class Group extends Model
{
    //
    protected $table='Group';
    protected $fillable=[];//白名单
    protected $guarded=[];
    public $timestamps=false;
}
