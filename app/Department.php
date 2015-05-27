<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

	protected $table = "departments";

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function users(){
		/** @var TYPE_NAME $this */
		return $this -> hasMany('App\User');
	}

}
