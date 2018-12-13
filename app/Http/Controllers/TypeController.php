<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Types;
use Illuminate\Http\Request;

class TypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Types::simplePaginate(30);
		return view('typetable', ['data'=>$data]);
	}

	public function search(Request $request) {

		$key = '%'. $request->key . '%';

		$data = Types::where('NameType', 'like', $key)->simplePaginate(30);
		return view('typetable', ['data'=>$data]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getcreate()
	{
		//Gọi trang view trong thư mục type, file createtype.blade.php
		return view('createtype');
	}

	/**
	 * action để lưu category mọi khi form submit
	 *
	 * @return Response
	 */
	public function postCreate(Request $request)
	{
		
		$allRequest = $request->all();
		$nameType = $allRequest['name'];
		$dataInsertToDatabase = array(
			'NameType' => $nameType
		);

	
		
		$objType = new Types();
		$objType->insert($dataInsertToDatabase);
		return redirect()->route('admin.type');
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
		
		$objType = new  Types();
		$getTypeById = $objType->find($id)->toArray();
		return view ('edittype',array('id'=>$id))->with('getTypeById', $getTypeById);
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
		$idType = $id;
		$nameType = $allRequest['name'];

		$objType = new Types();
		$getTypeById = $objType->find($idType);
		$getTypeById->NameType = $nameType;
		$getTypeById->save();
		return redirect()->route('admin.type');
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
		Types::find($id)->delete();
		return redirect()->action('TypeController@index');
	}

}
