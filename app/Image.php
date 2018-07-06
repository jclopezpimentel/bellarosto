<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable =[ 'id', 'imageName', 'pathImage', 'imageVisibility', 'id_categories'];
}
