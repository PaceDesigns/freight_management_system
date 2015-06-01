<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductRequest extends Request {

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
			'consignee'				=>'required',
			'HAWB'					=>'required|unique:products',
			'product_type'			=>'required',
			'product_description'	=>'required|max:255',
			'quantity'				=>'required',
			'gross_weight'			=>'required',
			'destination'			=>'required',
			'destination_address'	=>'required',
			'courier_id'			=>'required',
		];
	}

}
