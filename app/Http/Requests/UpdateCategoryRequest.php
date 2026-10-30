<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()?->can('view-platform-owner-dashboard') ?? false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:80', Rule::unique(Category::class, 'name')->ignore($this->route('category'))],
            'slug' => ['required', Rule::unique(Category::class, 'slug')->ignore($this->route('category'))],
        ];
    }

    protected function prepareForValidation(): void
    {
        $name = $this->string('name')->trim()->toString();

        $this->merge([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
    }

    /**
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'slug' => 'nombre',
        ];
    }
}
