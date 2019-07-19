@extends('mage::layout.page')
@section('web-title', __('mage.promocodes.show.web-title'))
@section('page-title', __('mage.promocodes.show.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.promocodes.index.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.promocodes.show.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.promocodes.show.title')</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
    </div>
</div>
@endsection