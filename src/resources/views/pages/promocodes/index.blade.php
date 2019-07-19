@extends('mage::layout.page')
@section('web-title', __('mage.promocodes.index.web-title'))
@section('page-title', __('mage.promocodes.index.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.promocodes.index.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.promocodes.index.title')</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <a href="{{ route('mage-plugin-coupons.promocodes.create') }}">
                    <button class="btn btn-sm btn-success">@lang('mage.promocodes.new')</button>
                </a>     
            </div>
        </div>
    </div>
    <div class="card-body">
        @include('mage-plugin-coupons::pages.promocodes.datatables.list')
    </div>
</div>
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('vendor/mage-plugin-coupons/js/list.datatable.js') }}"></script>
@endsection