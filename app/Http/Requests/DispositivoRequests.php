<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class DispositivoRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'marca_id' => 'integer|exists:marcas,marca_id',
            'modelo_id' => 'integer|exists:modelos,modelo_id',
        ];
    }

    public function messages()
    {

        return [
            'marca_id.integer' => 'El campo marca_id debe ser un número entero',
            'marca_id.exists' => 'El campo marca_id no existe en la tabla marcas',
            'modelo_id.integer' => 'El campo modelo_id debe ser un número entero',
            'modelo_id.exists' => 'El campo modelo_id no existe en la tabla modelos',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'msg' => 'Error de validación',
            'errors' => $validator->errors()
        ], Response::HTTP_BAD_REQUEST));
    }
}
