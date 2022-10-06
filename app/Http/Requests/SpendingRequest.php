<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpendingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'spending.cost' => 'required|integer',
            'spending.category_id' => 'required',
        ];
    }
    
}
