<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table='Contact';
    protected $fillable=[];//白名单
    protected $guarded=[];
    public $timestamps=false;
}
