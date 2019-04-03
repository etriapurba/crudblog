<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloge extends Model
{
    
	public $timestamps = false;
	protected $fillable = ['title','slug','subject'];
}
