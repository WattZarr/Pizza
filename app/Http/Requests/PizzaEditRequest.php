<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaEditRequest extends FormRequest
{
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
                'pizza_name' => 'required',
                'description' => 'required',
                'smallPrice' => 'required',
                'mediumPrice' => 'required',
                'largePrice' => 'required',
                'catagory' => 'required',
        ];
    }
}
