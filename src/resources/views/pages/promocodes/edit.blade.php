@extends('mage::layout.page')
@section('web-title', __('mage.promocodes.edit.web-title'))
@section('page-title', __('mage.promocodes.edit.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.promocodes.index.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.promocodes.edit.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.promocodes.edit.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form id="mage-promocodes-form" action="{{route('mage-plugin-coupons.promocodes.update', $promocode['id'])}}" method="POST">
        @method('PUT')
        @include('mage-plugin-coupons::pages.promocodes.forms.main')
    </form>
</div>
@endsection
