@extends('mage::layout.page')
@section('web-title', __('mage.promocodes.create.web-title'))
@section('page-title', __('mage.promocodes.create.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.promocodes.index.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.promocodes.create.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.promocodes.create.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form id="mage-promocodes-form" action="{{route('mage-plugin-coupons.promocodes.store')}}" method="POST">
        @method('POST')
        @include('mage-plugin-coupons::pages.promocodes.forms.main')
    </form>
</div>
@endsection