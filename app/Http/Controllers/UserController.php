<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use Illuminate\Support\MessageBag;

use Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use App\users;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Users::simplePaginate(30);
		return view('usertable', ['data'=>$data]);
	}


	public function search(Request $request) {

		$key = '%'. $request->key .'%';

		$data = Users::where('name', 'like', $key)
		->orWhere('email', 'like', $key)->simplePaginate(30);
		return view('usertable', ['data'=>$data]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return view('createuser');
	}

	public function postCreate(Request $request)
	{
		
		$this->validate($request,
        [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            //'password' => 'required|string|min:6|confirmed',
            'password' => 'required|min:6|max:32',
            're_password' => 'required|same:password'

        ],
        [
            'name.required' => 'Họ và tên là trường bắt buộc',
            'name.max' => 'Họ và tên ít nhất có 3 ký tự',
            'email.required' => 'email là trường bắt buộc',
            'email.email' => 'email không đúng định dạng',
            'email.max' => 'email không quá 255 ký tự',
            'email.unique' => 'email đã tồn tại',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            're_password.same' => 'Xác nhận mật khẩu không đúng',
            're_password.required' => 'bạn chưa nhập lại mất khẩu',
        ]);
        $users = new users;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->level = $request->rdoStatus;
        $users -> save();

        return redirect()->route('admin.users');
	}

	public function getEdit($id)
	{
		
		$objUser = new  Users();
		$getUserById = $objUser->find($id)->toArray();
		return view ('edituser',array('id'=>$id))->with('getUserById', $getUserById);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id,Request $request)
	{
		$users = Users::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        //$users->level = $request->rdoStatus;
        $users -> save();

        return redirect()->route('admin.users');
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
		Users::find($id)->delete();
		return redirect()->action('UserController@index');
	}

}
