<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrand extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'wb_id' => 'required|numeric',
            'name' => 'required',
            'url' => 'required',
            'letter' => 'required',
            'site_id' => 'numeric',
            'total' => 'required|numeric'
        ];
    }

    /**
     * Получить сообщения об ошибках для определенных правил валидации.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'wb_id.required' => 'Поле "WB Id" обязательно для заполнения',
            'wb_id.numeric' => 'Поле "WB Id" может содержать только цифры',
            'name.required' => 'Поле "Название" обязательно для заполнения',
            'url.required' => 'Поле "URL" обязательно для заполнения',
            'letter.required' => 'Поле "Первая буква" обязательно для заполнения',
            'site_id.numeric' => 'Поле "Site Id" может содержать только цифры',
            'total.required' => 'Поле "Колличество товаров" обязательно для заполнения',
            'total.numeric' => 'Поле "Колличество товаров" может содержать только цифры',
        ];
    }
}

