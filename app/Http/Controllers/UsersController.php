<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\User;

class UsersController extends Controller {

	/**
	 *
	 */
	public function __construct(){
		$this->middleware('auth');

		// $this->middleware('adminCheck');
	}

	/**
	 * Display a listing of the resource.
	 *
	 *
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return view('admin.users.index')->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.users.create');
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @param CreateUserRequest|Request $request
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{
		User::create($request->all());

		return redirect('admin/users/');
	}

	/**
	 * Display the specified resource.
	 *
	 *
	 *
	 * @internal param int $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		return view('admin.users.show')->withUser($user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 *
	 *
	 * @internal param int $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return view('admin.users.edit')->withUser($user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 *
	 *
	 * @internal param int $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		User::update($request->all());

		return redirect('admin.users');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 *
	 *
	 * @param int $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		return redirect('admin.users');
	}

}
