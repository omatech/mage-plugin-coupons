<li class="nav-header">@lang('mage-plugin-coupons.sidebar.title')</li>

@can('mage-plugin-coupons-zone', 'mage')
<li class="nav-item">
    <a href="{{ route('mage-plugin-coupons.promocodes.index') }}" class="nav-link {{ !isRoute(['mage-plugin-coupons.dashboard']) ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="message-circle"></i>
        </span>
        <span class="nav-text">@lang('mage-plugin-coupons.sidebar.test')</span>
    </a>
</li>
@endcan