<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'package';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function agency() {
		return $this->belongsTo('App\Agency');
	}     
}
