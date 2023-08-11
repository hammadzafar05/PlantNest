<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class categoryAccesssoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */

     public function createAccessoryCategory()
     {
        Category::create([
            'name' => $this->input('name'),
            'parent_id' => 2
        ]);
     }

    public function rules(): array
    {
        return [
            'name'=>'required|max:255'
        ];
    }
}
