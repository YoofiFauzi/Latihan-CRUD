<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'  => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:150'],
            'isbn'   => ['required', 'string', 'max:20', 'unique:books,isbn'],
            'year'   => ['required', 'integer', 'between:1900,2100'],
        ];
    }
}
