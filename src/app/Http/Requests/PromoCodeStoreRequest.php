<?php

namespace Omatech\MagePluginCoupons\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromoCodeStoreRequest extends FormRequest
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
            'type' => 'string',
            'title' => 'string',
            'pct_discount' => 'nullable|numeric',
            'amount_discount' => 'nullable|numeric',
            'pct_shipping_discount' => 'nullable|numeric',
            'max_uses' => 'nullable|numeric',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'first_order_only' => 'boolean',
            'one_use_only' => 'boolean',
            'customer_one_use_only' => 'boolean',
            'active' => 'boolean',
            'code' => 'required|unique:promo_codes,code'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
        ];
    }
}
