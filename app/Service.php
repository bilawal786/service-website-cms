<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['icon','name','price','title1','title2','title3','title4','image','heading','subheading','description','otherimages','feature1','feature1detail','feature2','feature2detail','feature3detail','feature3'];

    public function projects(){
        return $this->hasMany(Project::class,'serviceid');
    }
}
