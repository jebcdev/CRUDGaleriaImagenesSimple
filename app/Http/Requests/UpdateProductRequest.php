<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:200|unique:products,name,' . $this->route('product')->id,
            'description' => 'nullable|string',
            'image' => 'image|max:2048', // max:2048 es opcional y establece el tamaño máximo de la imagen en kilobytes
            'price' => 'required|numeric|min:0',
        ];
    }
}
