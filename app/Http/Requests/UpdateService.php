<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateService extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'service_name' => 'required|string|max:255',
            'service_category'  => 'required|string|max:255',
            'service_image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'first_title' => 'required|string|max:255',
            'first_description' => 'required|string',
            'second_title' => 'required|string|max:255',
            'second_description' => 'required|string'
        ];
    }
}
