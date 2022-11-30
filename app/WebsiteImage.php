<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebsiteImage extends Model
{
    protected $table = 'websiteimages';
    protected $fillable = ['image1','image2','image3','image4','image5','image6','image7'];
}
