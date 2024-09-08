<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
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
           'name' => 'required|string',
           'position' => 'required|string',
           'image' => 'nullable|mimes:jpg,png|max:10000',
           'twitter' => 'nullable|url',
           'facebook' => 'nullable|url',
           'linkedin' => 'nullable|url',

        ];
    }

    public function attributes(): array
    {
        return [
            'name'        => __("keywords.name"),
            'position'    => __("keywords.position"),
            'image'       => __("keywords.image"),
            'twitter' => __("keywords.twitter"),
            'facebook' => __("keywords.facebook"),
            'linkedin' => __("keywords.linkedin"),
        ];
    }
}
