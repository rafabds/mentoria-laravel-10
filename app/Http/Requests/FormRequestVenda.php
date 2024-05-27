<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestVenda extends FormRequest
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
        $request = [];
        if($this->method() == "POST" || $this->method() == "PUT") {
            $request = [
                'produto_id' => 'required',
                'cliente_id' => 'required',
            ];
        }
        return $request;
    }
}
