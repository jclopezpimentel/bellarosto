<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
	protected $table ='administrators';

 protected $fillable = ['name', 'password', 'created_at', 'updated_at'];

}
