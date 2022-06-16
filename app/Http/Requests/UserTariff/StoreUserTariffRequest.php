<?php

namespace App\Http\Requests\UserTariff;

use App\Models\Tariff;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreUserTariffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() && $this->user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'unique:tariff_users', 'email'],
            'tariff_type' => [Rule::in(['tariff_id', 'tariff_option'])],
            'tariff_id' => [Rule::in(Tariff::$tariff_ids)]
        ];
    }
}
