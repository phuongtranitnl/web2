<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Application;
use App\Banners;
use App\Types;
use App\Cart;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($page = 'index')
	{
		// Nếu dữ liệu trả về là trang index (Tri có một tham số truyền vào)
		if($page == 'index') {


			// Lấy nội dung mới nhất hiển thị
			$data = DB::table('Application')
			->join('Types', 'Application.IdType', '=' , 'Types.IdType')
			->select('Application.*', 'Types.NameType')->paginate(6);


			// Lay 4 banner moi nhat
			$banner = DB::table('Banners')->limit(4)->get();


			// Lay 10 ung dung tai nhieu nhat
			$topdown =  DB::table('Application')->orderBy('NumberDownload', 'desc')->where('IdCategory', 1)->limit(10)->get();



			// Lay 6 ung dung ngau nhien de de xuat
			$randomApp = Application::all()->random(6);



			//$data->setBaseUrl('myproject/public/index');
			return view('index', ['data'=>$data, 'banner'=>$banner, 'topdown'=>$topdown, 'randomApp'=>$randomApp]);


		}
		
		if ($page == 'games') {

			
			// Lấy nội dung mới nhất hiển thị
			$data = DB::table('Application')
			->join('Types', 'Application.IdType', '=' , 'Types.IdType')
			->select('Application.*', 'Types.NameType')->where('IdCategory', 4)->paginate(9);


			// Lay 4 banner moi nhat
			$banner = DB::table('Banners')->limit(4)->get();


			// Lay 10 ung dung tai nhieu nhat
			$topdown =  DB::table('Application')->orderBy('NumberDownload', 'desc')->where('IdCategory', 2)->limit(10)->get();



			// Lay 6 ung dung ngau nhien de de xuat
			$randomApp = Application::all()->random(6);



			//$data->setBaseUrl('myproject/public/index');
			return view('index', ['data'=>$data, 'banner'=>$banner, 'topdown'=>$topdown, 'randomApp'=>$randomApp]);
		}

		if ($page == 'books') {

			
			// Lấy nội dung mới nhất hiển thị
			$data = DB::table('Application')
			->join('Types', 'Application.IdType', '=' , 'Types.IdType')
			->select('Application.*', 'Types.NameType')->where('IdCategory', 2)->paginate(9);


			// Lay 4 banner moi nhat
			$banner = DB::table('Banners')->limit(4)->get();


			// Lay 10 ung dung tai nhieu nhat
			$topdown =  DB::table('Application')->orderBy('NumberDownload', 'desc')->where('IdCategory', 2)->limit(10)->get();



			// Lay 6 ung dung ngau nhien de de xuat
			$randomApp = Application::all()->random(6);



			//$data->setBaseUrl('myproject/public/index');
			return view('index', ['data'=>$data, 'banner'=>$banner, 'topdown'=>$topdown, 'randomApp'=>$randomApp]);
		}


		// Các trang còn lại
		return view($page);
		
	}

	public function viewadmin() {
		return view('admin');
	}

	// Tim kiem ung dung theo ten
	public function searchApp(Request $request) {

		$key = '%'. $request->key. '%';
		$total  = Application::where('NameApp', 'like', $key)->get();
		
		$data = Application::where('NameApp', 'like', $key)
		//->orWhere('Developer', 'like', $key
		->paginate(3);
		
		
		$data->appends(['key' => $request->key]);

		return view('search', ['data'=>$data, 'key'=>$request->key, 'total'=>$total]);
	}


	// Loc ung dung theo loai
	public function filterType($type) {


			// Lấy nội dung mới nhất hiển thị
		$data = DB::table('Application')
		->join('Types', 'Application.IdType', '=' , 'Types.IdType')
		->where('Application.IdType', $type)
		->select('Application.*', 'Types.NameType')->paginate(9);


			// Lay 4 banner moi nhat
		$banner = DB::table('Banners')->limit(4)->get();


			// Lay 10 ung dung tai nhieu nhat
		$topdown =  DB::table('Application')->orderBy('NumberDownload', 'desc')->where('IdCategory', 1)->limit(10)->get();



			// Lay 6 ung dung ngau nhien de de xuat
		$randomApp = Application::all()->random(6);



			//$data->setBaseUrl('myproject/public/index');
		return view('index', ['data'=>$data, 'banner'=>$banner, 'topdown'=>$topdown, 'randomApp'=>$randomApp]);
		

	}

	// Lay ten ung dung
	public function getNameType($id) {

		return Types::find($id);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($appid)
	{
		
		$data = DB::table('Application')
		->join('Types', 'Application.IdType', '=' , 'Types.IdType')
		->select('Application.*', 'Types.NameType')->where('IdApplication', $appid)->first();

		$reviewdata =  DB::table('Reviews')
		->join('Application', 'Reviews.IdApplication', '=', 'Application.IdApplication')
		->join('Users', 'Reviews.IdUser', '=', 'Users.id')
		->select('Reviews.*', 'Application.NameApp', 'Users.name', 'voting')
		->where('Reviews.IdApplication', $appid)->take(5)->get();

		return view('chitiet', ['data'=>$data, 'reviewdata'=>$reviewdata]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
	}

	public function getcart() {
		$userid = \Auth::user()->id;
		$data = DB::table('cart')
		->join('users', 'cart.userid', '=' , 'users.id')
		->join('Application', 'cart.appid', '=', 'Application.IdApplication')
		->select('cart.*', 'users.name', 'Application.NameApp', 'Application.price')
		->where('userid', $userid)->get();
		return view('cart', ['data'=>$data]);
	}

	public function postcart($appid) {
		$userid = \Auth::user()->id;
		$date = new \DateTime();
		$dataInsertToDatabase = array(
			'appid' => $appid,
			'userid' => $userid,
			'created_at' => $date,
		);
		
		$cart = new Cart();
		$cart->insert($dataInsertToDatabase);
		$data = DB::table('cart')
		->where('userid', $userid)->get();
		//return redirect()->view('cart', ['data'=>$data]);
		return redirect('cart')->with('data', $data);
	}

	public function cartremove($appid) {
		// $data = Cart::find($appid);
		// $data->delete();
		$userid = \Auth::user()->id;
		DB::table('cart')->where('userid', '=', $userid)->where('appid', $appid)->delete();
		return redirect()->action('ProjectController@getcart');
	}

}
