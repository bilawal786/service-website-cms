<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['title','fDescription','fImage','date','image','categoryid','heading','description','author'];

    public function category(){
        return $this->belongsTo(Category::class,'categoryid');
    }
}
