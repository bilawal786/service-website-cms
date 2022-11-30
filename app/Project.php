<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['name','image','image1','heading1','description1','heading2','description2','categoryid','serviceid','client','date','location','image2','summarydescription'];


    public function category(){
        return $this->belongsTo(Category::class,'categoryid');
    }
    public function service(){
        return $this->belongsTo(Service::class,'serviceid');
    }
}
