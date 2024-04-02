<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:3|max:255|alpha',
            'description'=>'required|max:255|string',
            'price'=>'required|numeric',
            'stock'=>'required|numeric'
        ];
    }

    public function messages():array
    {
       return[
        'name.required'=>'Product Name cannot be empty',
        'name.min'=>'Give atleast 3 character for product Name',
        'name.max'=>'Product Name must be 3 to 255 charecters',

      ];
    }
}
