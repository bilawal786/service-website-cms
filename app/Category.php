<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name','image'];

    public function projects(){
        return $this->hasMany(Project::class,'categoryid');
    }
    public function estimates(){
        return $this->hasMany(Estimate::class,'categoryid');
    }
    public function blogs(){
        return $his->hasMany(Blog::class,'categoryid');
    }

}
