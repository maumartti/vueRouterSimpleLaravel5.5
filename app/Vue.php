<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vue extends Model
{
	public $timestamps = false;
	protected $table = 'vue';	
    protected $fillable = ['descripcion'];
}
