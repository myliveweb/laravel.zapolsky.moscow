<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeller extends FormRequest
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
            'fine_name' => 'required',
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
            'fine_name.required' => 'Поле "Экранное имя" обязательно для заполнения',
            'total.required' => 'Поле "Колличество товаров" обязательно для заполнения',
            'wb_id.numeric' => 'Поле "WB Id" может содержать только цифры',
            'wb_id.unique' => 'Поле "WB Id" должно быть уникальным',
            'total.numeric' => 'Поле "Колличество товаров" может содержать только цифры',
        ];
    }
}
