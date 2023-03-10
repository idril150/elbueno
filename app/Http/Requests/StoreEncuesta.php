<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEncuesta extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'periodo' => 'required',
            'estado' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del curso,'
        ];
    }

    public function messages()
    {
        return [
            'periodo.required' => 'Debe ingresar el periodo del curso'
        ];
    }
}
