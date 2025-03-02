<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class WeatherRequest extends FormRequest
{
    public function rules()
    {
        return [
            'city' => 'required|string',
        ];
    }
}
