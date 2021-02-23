<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
		'title'=>'required|string|between:1,22',
		'type'=>'required|integer|exists:post_types,id',
        'content'=>'required|string',
        'photo'=>'nullable|image'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '請填寫標題!',
            'title.string' => '標題僅支持字串!',
            'title.between' => '標題長度須介于1~22之間!',
            'type.required' => '請選擇分類!',
            'type.exists' => '請選擇分類!',
            'content.required' => '請填寫內文!',
            'content.string' => '內文僅支持字串!',
        ];
    }
}