<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'codeNo'=>'required',
            'name'=>'required',
            'photo'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'instock'=>'required',
            'category_id'=>'required',
            'description'=>'required'
        ];
    }
    public function messages(){
        return [
            'codeNo.required'=> '!Enter a valid codeNo',
            'name.required'=> '!Enter a valid name',
            'photo.required'=> '*Require photo',
            'price.required'=> '!Enter a vaild price',
            'discount.required'=> '!Enter a valid discount',
            'instock.required'=> '!Enter a valid instock',
            'category_id.required'=> '*Require category',
            'description.required'=> '*Require description'

        ];
    }
}
