<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Application extends Model {

	protected $table = 'Application';
	protected $primaryKey = 'IdApplication';


	public $timestamps = false;


	public function Reviews() {
		return $this->hasMany('App\Reviews');
	}

	public function Category() {
		return $this->belongsto('App\Application', 'IdCategory');
	}

	public function Types() {
		return $this->belongsto('App\Types', 'IdType');
	}
	
	
}
