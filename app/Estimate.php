<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    protected $table = 'estimates';
    protected $fillable = ['categoryid','serviceid','item','price','quantity','description','date'];
}
