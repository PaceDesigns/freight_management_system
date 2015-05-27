<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateClientRequest extends Request {

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
			'name' => 'required',
			'nationality' => 'required|min:6',
			'company_name' => 'required',
			'national_id' => 'required|unique:clients',
			'email' => 'required|email|max:255|unique:clients',
			'phone_number' => 'required|min:8',
			'occupation' => 'required',
			'address' => 'required|string|max:255',
		];
	}

}
