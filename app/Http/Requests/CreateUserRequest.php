<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' 				=> 'required|max:255',
			'email' 			=> 'required|email|max:255|unique:users',
			'address'			=> 'required|string|max:255',
			'function' 			=> 'required|string|max:255',
			'password' 			=> 'required|confirmed|min:6',
			'gender' 			=> 'required|numeric|max:1',
			'department_id' 	=> 'required|numeric',
			'privilege' 		=> 'required|numeric',
		];
	}

}
