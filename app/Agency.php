<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{

	protected $table = 'agency';

	// each agency have many packages
	public function packages() {
		return $this->hasMany('App\Package');
	}    
}
