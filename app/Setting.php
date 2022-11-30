<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
     protected $fillable = ['aboutus','image','address','email1','email2','number1','number2'];
}
