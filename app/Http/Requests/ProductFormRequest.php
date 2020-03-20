<?php

namespace App\Http\Requests;

use App\Product;
use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $product = Product::all();

        return $product && $this->user()->can('create', 'update', 'delete', $product);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'name'=> 'string|required',
            'manufacturer'=> 'string|required',
            'consist'=> 'string|required',
            'expiration_date'=> 'string|required',
            'price'=> 'integer|required',
            'description'=> 'string|required',

        ];
    }
}
