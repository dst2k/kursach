<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $fillable = ['image'];
	public function comments()
	{
    return $this->belongsTo('App\User');
	}
}
