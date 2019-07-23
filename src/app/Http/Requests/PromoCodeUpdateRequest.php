<?php

namespace Omatech\MagePluginCoupons\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromoCodeUpdateRequest extends FormRequest
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
            'pct_discount' => 'numeric',
            'amount_discount' => 'numeric',
            'pct_shipping_discount' => 'numeric',
            'max_uses' => 'numeric',
            'start_date' => 'date',
            'end_date' => 'date',
            'first_order_only' => 'boolean',
            'one_use_only' => 'boolean',
            'customer_one_use_only' => 'boolean',
            'active' => 'boolean',
            'code' => 'unique:promo_codes,code,'.$this->id,
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
