<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller {


	public function __construct(){
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clients = Client::all();
		return view('home.customers.index')->withClient($clients);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('home.customers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param CreateClientRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateClientRequest $request)
	{
		Client::create($request->all());
		return redirect('home.clients');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$client = Client::find($id);
		return view('home.clients.show')->with('client', $client);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$client = Client::find($id);
		return view('home.clients.edit')->with('client', $client);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateClientRequest $request, $id)
	{
		$client = Client::find($id);
		$client->update($request->all());
		return redirect('home.clients');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$client = Client::find($id);
		$client->delete();
		return redirect('home.clients');
	}

}
