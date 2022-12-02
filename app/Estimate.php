<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    protected $table = 'estimates';
    protected $fillable = ['categoryid','serviceid','item','price','quantity','description','date'];

    public function category(){
        return $this->belongsTo(Category::class,'categoryid');
    }
    public function service(){
        return $this->belongsTo(Service::class,'serviceid');
    }
}
