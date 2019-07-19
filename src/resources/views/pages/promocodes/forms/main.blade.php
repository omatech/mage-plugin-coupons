<input type="hidden" name="first_order_only" value="0">
<input type="hidden" name="one_use_only" value="0">
<input type="hidden" name="customer_one_use_only" value="0">
<input type="hidden" name="active" value="0">
<div class="card-body">
    <div class="form-group">
        <label for="mage-users-type">@lang('mage-plugin-coupons.users.form.type')</label>
        <input name="type" type="text" class="form-control @if($errors->has('type')) is-invalid @endif" id="mage-promocode-type" placeholder="@lang('mage-plugin-coupons.promocodes.form.type.placeholder')" value="{{ old('name', $promocode['type'] ?? '') }}">
    </div>
    <div class="form-group">
        <label for="mage-users-title">@lang('mage-plugin-coupons.users.form.title')</label>
        <input name="title" type="text" class="form-control @if($errors->has('title')) is-invalid @endif" id="mage-promocodes-title" placeholder="@lang('mage-plugin-coupons.promocodes.form.title.placeholder')" value="{{ old('title', $promocode['title'] ?? '') }}">
    </div>
    <div class="form-group">
        <label for="mage-users-pct_discount">@lang('mage-plugin-coupons.users.form.pct_discount')</label>
        <input name="pct_discount" type="text" class="form-control @if($errors->has('pct_discount')) is-invalid @endif" id="mage-promocodes-pct_discount" placeholder="@lang('mage-plugin-coupons.promocodes.form.pct_discount.placeholder')" value="{{ old('pct_discount', $promocode['pct_discount'] ?? '') }}">
    </div>
    <div class="form-group">
        <label for="mage-users-amount_discount">@lang('mage-plugin-coupons.users.form.amount_discount')</label>
        <input name="amount_discount" type="text" class="form-control @if($errors->has('amount_discount')) is-invalid @endif" id="mage-promocodes-amount_discount" placeholder="@lang('mage-plugin-coupons.promocodes.form.amount_discount.placeholder')" value="{{ old('amount_discount', $promocode['amount_discount'] ?? '') }}">
    </div>
    <div class="form-group">
        <label for="mage-users-pct_shipping_discount">@lang('mage-plugin-coupons.users.form.pct_shipping_discount')</label>
        <input name="pct_shipping_discount" type="text" class="form-control @if($errors->has('pct_shipping_discount')) is-invalid @endif" id="mage-promocodes-pct_shipping_discount" placeholder="@lang('mage-plugin-coupons.promocodes.form.pct_shipping_discount.placeholder')" value="{{ old('pct_shipping_discount', $promocode['pct_shipping_discount'] ?? '') }}">
    </div>
    <div class="form-group">
        <label for="mage-users-max_uses">@lang('mage-plugin-coupons.users.form.max_uses')</label>
        <input name="max_uses" type="text" class="form-control @if($errors->has('max_uses')) is-invalid @endif" id="mage-promocodes-max_uses" placeholder="@lang('mage-plugin-coupons.promocodes.form.max_uses.placeholder')" value="{{ old('max_uses', $promocode['max_uses'] ?? '') }}">
    </div>
    <div class="form-group">
        <label for="mage-users-start_date">@lang('mage-plugin-coupons.users.form.start_date')</label>
        <input name="start_date" type="text" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" im-insert="true" class="form-control @if($errors->has('start_date')) is-invalid @endif" id="mage_promocodes_start_date" placeholder="@lang('mage-plugin-coupons.promocodes.form.start_date.placeholder')" value="{{ old('start_date', $promocode['start_date'] ?? '') }}">
    </div>
    <div class="form-group">
        <label for="mage-users-end_date">@lang('mage-plugin-coupons.users.form.end_date')</label>
        <input name="end_date" type="text" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" im-insert="true" class="form-control @if($errors->has('end_date')) is-invalid @endif" id="mage_promocodes_end_date" placeholder="@lang('mage-plugin-coupons.promocodes.form.end_date.placeholder')" value="{{ old('end_date', $promocode['end_date'] ?? '') }}">
    </div>
    <div class="form-group">
        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" value="1" class="custom-control-input" id="mage_promocodes_first_order_only" name="first_order_only" @if(old('first_order_only', $promocode['first_order_only'] ?? false)) checked @endif>
            <label class="custom-control-label" for="mage_promocodes_first_order_only">@lang('mage-plugin-coupons.users.form.first_order_only')</label>
        </div>
    </div>
    <div class="form-group">
        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" value="1" class="custom-control-input" id="mage_promocodes_one_use_only" name="one_use_only" @if(old('one_use_only', $promocode['one_use_only'] ?? false)) checked @endif>
            <label class="custom-control-label" for="mage_promocodes_one_use_only">@lang('mage-plugin-coupons.users.form.one_use_only')</label>
        </div>
    </div>
    <div class="form-group">
        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" value="1" class="custom-control-input" id="mage_promocodes_customer_one_use_only" name="customer_one_use_only" @if(old('customer_one_use_only', $promocode['customer_one_use_only'] ?? false)) checked @endif>
            <label class="custom-control-label" for="mage_promocodes_customer_one_use_only">@lang('mage-plugin-coupons.users.form.customer_one_use_only')</label>
        </div>
    </div>
    <div class="form-group">
        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" value="1" class="custom-control-input" id="mage_promocodes_active" name="active" @if(old('active', $promocode['active'] ?? false)) checked @endif>
            <label class="custom-control-label" for="mage_promocodes_active">@lang('mage-plugin-coupons.users.form.active')</label>
        </div>
    </div>
    <div class="form-group">
        <label for="mage-users-code">@lang('mage-plugin-coupons.users.form.code')</label>
        <input name="code" type="text" class="form-control @if($errors->has('code')) is-invalid @endif" id="mage-promocodes-code" placeholder="@lang('mage-plugin-coupons.promocodes.form.code.placeholder')" value="{{ old('code', $promocode['code'] ?? '') }}">
    </div>
</div>
<div class="card-footer">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">@lang('mage-plugin-coupons.users.form.save')</button>
</div>
