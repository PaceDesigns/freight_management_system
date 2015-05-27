<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'address' => 'required|string|max:255',
			'function' => 'required|string|max:255',
			'password' => 'required|confirmed|min:6',
			'gender' => 'required|numeric|max:1',
			'department_id' => 'required|numeric|max:1',
			'privilege' => 'required|numeric|max:1',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'department_id' => $data['department_id'],
			'gender' => $data['gender'],
			'address' => $data['address'],
			'function' => $data['function'],
			'privilege' => $data['privilege'],
			'password' => bcrypt($data['password']),
		]);
	}

}
