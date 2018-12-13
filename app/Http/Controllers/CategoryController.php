<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Routing\Redirector;

use Illuminate\Http\Request;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$data = Category::simplePaginate(30);
		return view('categorytable', ['data'=>$data]);
	}


	public function search(Request $request) {

		$key = '%'. $request->key .'%';

		$data = Category::where('NameCategory', 'like', $key)->simplePaginate(30);
		return view('categorytable', ['data'=>$data]);
	}


	/**
	 * Hiển thị form thêm mới .
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		//Gọi trang view trong thư mục category, file createcategory.blade.php
		return view('createcategory');
	}

	/**
	 * action để lưu category mọi khi form submit
	 *
	 * @return Response
	 */
	public function postCreate(Request $request)
	{
		
		$allRequest = $request->all();
		$nameCategory = $allRequest['name'];
		$dataInsertToDatabase = array(
			'NameCategory' => $nameCategory
		);

	
		
		$objCategory = new Category();
		$objCategory->insert($dataInsertToDatabase);
		return redirect()->route('admin.category');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		
		$objCategory = new  Category();
		$getCategoryById = $objCategory->find($id)->toArray();
		return view ('editcategory',array('id'=>$id))->with('getCategoryById', $getCategoryById);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id,Request $request)
	{
		//
		$allRequest = $request->all();
		$idCategory = $id;
		$nameCategory = $allRequest['name'];

		$objCategory = new Category();
		$getCategoryById = $objCategory->find($idCategory);
		$getCategoryById->NameCategory = $nameCategory;
		$getCategoryById->save();
		return redirect()->route('admin.category');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function destroy($id)
	{
		//
		Category::find($id)->delete();
		return redirect()->action('CategoryController@index');
	}

}
