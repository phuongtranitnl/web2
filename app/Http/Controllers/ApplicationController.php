<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Application;
use App\Banners;
use App\Types;
use App\Reviews;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
 use File;  

use Illuminate\Http\Request;

class ApplicationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		 // $data = Application::with('Category', 'Types')->get();
		$data = DB::table('Application')
		->join('Category', 'Application.IdCategory', '=', 'Category.IdCategory')
		->join('Types', 'Application.IdType', '=', 'Types.IdType')
		->select('Application.*', 'Types.NameType', 'Category.NameCategory')->simplePaginate(30);

		return view('apptable', ['data'=>$data]);
	}


	public function search(Request $request) {

		$key = '%'. $request->key. '%';

		$data = DB::table('Application')
		->join('Category', 'Application.IdCategory', '=', 'Category.IdCategory')
		->join('Types', 'Application.IdType', '=', 'Types.IdType')
		->where('NameApp', 'like', $key)
		->orWhere('NameType', 'like', $key)
		->orWhere('NameCategory', 'like', $key)
		->select('Application.*', 'Types.NameType', 'Category.NameCategory')->simplePaginate(30);

		return view('apptable', ['data'=>$data]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$category = Category::all();
		$type = Types::all();
		return view('addapplication', ['type'=>$type, 'category'=>$category]);
	}

	public function handleFile($image2, $location, $idapp = "") {
		$nameimage2 = $image2->getClientOriginalName();  // Lấy tên file
		$image2type = $image2->getClientOriginalExtension(); // Lấy đuôi file
		$linkimage2 = $image2->getRealPath();
	
		if ($image2type == "jpg"  OR $image2type == "png") {
			// Tiến hành di chuyển file vô thư mục
			$image2->move($location, $nameimage2);
			Application::where('IdApplication', $idapp)->update(['Image2'=>$nameimage2]);
			return $nameimage2;
		} else {
			return view('file_error');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		

		$allRequest = $request->all();

		$idcategory = $allRequest['idcategory'];
		$idtype = $allRequest['idtype'];
		$nameapp = $allRequest['nameapp'];
		$developer = $allRequest['developer'];
		$sortdescription = $allRequest['sortdescription'];
		$description = $allRequest['description'];
		
		$linkdownload = $allRequest['linkdownload'];
		$version = $allRequest['version'];
		$size = $allRequest['size'];

		$location = 'public/images/';
		$result = true;



		// Kiểm tra tên ứng dụng có trùng với thành phần nào không
		if (Application::where('NameApp', $nameapp)->count() > 0) {
			return  'Tên của ứng dụng này đã tồn tại vui lòng đặt tên khác !';
		}


		// Xu ly cac thanh phan lien quan den file
		
		// Xu ly file icon
		$icon = $allRequest['icon'];

		$nameicon = $icon->getClientOriginalName();  // Lấy tên file
		$icontype = $icon->getClientOriginalExtension(); // Lấy đuôi file
		$linkicon = $icon->getRealPath();

		// Kiểm tra file đã tồn tại trong cơ sở dữ liệu chưa
		if (Application::where('Icon', $nameicon)->get()->count() > 0) {
			return 'Tên file của icon bạn chọn đã tồn tại vui lòng chọn file khác!';
		} else if (Application::where('Image1', $nameicon)->get()->count() > 0) {
			return 'Tên file của icon bạn chọn đã tồn tại vui lòng chọn file khác!';
		} else 	if (Application::where('Image2', $nameicon)->get()->count() > 0) {
			return 'Tên file của icon bạn chọn đã tồn tại vui lòng chọn file khác!';
		} else if (Application::where('Image3', $nameicon)->get()->count() > 0) {
			return 'Tên file của icon bạn chọn đã tồn tại vui lòng chọn file khác!';
		}

		if ($icontype == "jpg"  OR $icontype == "png") {
			// Tiến hành di chuyển file vô thư mục
			$icon->move($location, $nameicon);
		} else {
			$result = false;
			return 'Bạn chọn file icon không phải là hình ảnh :(';
		}

		// Xu ly file image 1
		$image1 = $allRequest['image1'];

		$nameimage1 = $this->handleFile($image1, $location);
		$nameimage2 = "";
		$nameimage3 = "";
		if ($request->hasFile('image2')) {
			// Xu ly file image 2
			$image2 = $allRequest['image2'];
			$nameimage2 = $this->handleFile($image2, $location);
		}


		// Xu ly file image 3
		if ($request->hasFile('image3')) {
			$image3 = $allRequest['image3'];
			$nameimage3 = $this->handleFile($image3, $location);
		}
		

		// Tiến hành thêm dữ liệu vào cơ sở dữ liệu
		if ($result == true) {
			
		$app = new Application();
		$app->IdCategory = $idcategory;
		$app->IdType = $idtype;
		$app->NameApp = $nameapp;
		$app->Developer = $developer;
		$app->Description = $description;
		$app->Icon = $nameicon;
		$app->Image1 = $nameimage1;
		$app->Image2 = $nameimage2;
		$app->Image3 = $nameimage3;
		$app->LinkDownload = $linkdownload;
		$app->Version = $version;
		$app->Size = $size;
		$app->NumberDownload = 0;
		$app->SortDescription = $sortdescription;
		$app->save();


		return redirect()->action('ApplicationController@index');

		}

		return 'Đã xảy ra sự cố ngoài ý muốn :)';
	}

	

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = Application::find($id);
		return view('detailapp', ['data'=>$data]);


	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		$category = Category::all();
		$type = Types::all();
		$editapp = Application::find($id);

		return view('editapp', ['type'=>$type, 'category'=>$category, 'editapp' =>$editapp]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		
		$allRequest = $request->all();

		$idapp = $allRequest['id'];

		$idcategory = $allRequest['idcategory'];
		$idtype = $allRequest['idtype'];
		$nameapp = $allRequest['nameapp'];
		$developer = $allRequest['developer'];
		$sortdescription = $allRequest['sortdescription'];
		$description = $allRequest['description'];
		
		$linkdownload = $allRequest['linkdownload'];
		$version = $allRequest['version'];
		$size = $allRequest['size'];

		$location = 'public/images/';
		$result = true;


		// Xu ly cac thanh phan lien quan den file
		
		// Xu ly file icon nếu người dùng chọn
		if ($request->hasFile('icon'))
		{		
			$icon = $allRequest['icon'];
			$this->handleFile($icon);
		}



		// Xu ly file image 1
		if ($request->hasFile('image1')) {
			
			$image1 = $allRequest['image1'];
			$this->handleFile($image1);
		}



			// Xu ly file image 2
		if ($request->hasFile('image2')) {

			$image2 = $allRequest['image2'];

			$this->handleFile($image2);
			
		}

			// Xu ly file image 3
		if ($request->hasFile('image3')) {
			
			$image3 = $allRequest['image3'];

			$this->handleFile($image3);

		}

		// Tiến hành cập nhật các thành phần còn lại vào cơ sở dữ liệu

		$app = Application::find($idapp);
		$app->IdCategory = $idcategory;
		$app->IdType = $idtype;
		$app->NameApp = $nameapp;
		$app->Developer = $developer;
		$app->Description = $description;
	
		$app->LinkDownload = $linkdownload;
		$app->Version = $version;
		$app->Size = $size;
		$app->SortDescription = $sortdescription;
		$app->save();


		return redirect()->action('ApplicationController@index');


}



	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// Xóa dữ liệu bảng liên quan trước
		Reviews::where('IdApplication', $id)->delete();


		// Thực hiện xóa file lưu trữ
		$data = Application::find($id);

		$icon = $data->Icon;
		$image1 =  $data->Image1;
		$image2 =  $data->Image2;
		$image3 =  $data->Image3;


		File::delete('public/images/'. $icon);  
		File::delete('public/images/'. $image1);  
		File::delete('public/images/'. $image2);  
		File::delete('public/images/'. $image3);  

		Application::find($id)->delete();



		return redirect()->action('ApplicationController@index');

	}

}
