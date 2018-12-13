<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {

	protected $table = 'cart';
	//public $timestamps = false;
	
	protected $fillable = ['cartid', 'userid', 'appid'];
	
	public function Users() {
		return $this->belongsto('App\Users');
	}

	public function Application() {
		return $this->belongsto('App\Application');
	}

}
