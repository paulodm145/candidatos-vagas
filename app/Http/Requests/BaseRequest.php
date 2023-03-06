<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

abstract class BaseRequest extends FormRequest
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
        $rules = [];
        if ($this->method() == 'GET')
            $rules = $this->get_rules;

        if ($this->method() === 'POST') {
            $rules = $this->post_rules;
        }


        if ($this->method() == 'PUT') {
            $rules = Arr::has($this->put_rules, 'use_post_rules') ? $this->post_rules : $this->put_rules;
        }

        if ($this->method() == 'DELETE')
            $rules = $this->delete_rules;

        return $rules;
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return property_exists($this, 'format_attributes') ? $this->format_attributes : [];
    }
}
