<?php

namespace App\Http\Requests;

use App\Models\Store;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;
use Illuminate\Validation\Rule;

class StoreStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()?->store()->doesntExist() ?? false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:120'],
            'description' => ['nullable', 'string', 'max:2000'],
            'subdomain' => [
                'required',
                'string',
                'min:3',
                'max:63',
                'regex:/^[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/',
                Rule::unique(Store::class, 'subdomain'),
            ],
            'type' => ['required', Rule::in(['physical', 'digital'])],
            'category_id' => ['required', 'integer', Rule::exists('categories', 'id')],
            'profile_image' => [
                'nullable',
                'bail',
                function (string $attribute, mixed $value, Closure $fail): void {
                    if ($value instanceof UploadedFile && ! is_file($value->getPathname())) {
                        $fail('No se pudo procesar la imagen seleccionada. Intentá cargarla nuevamente.');
                    }
                },
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ];
    }
}
