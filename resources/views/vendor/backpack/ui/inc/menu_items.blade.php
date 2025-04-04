{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="{{__('Settings')}}" icon="la la-question" :link="backpack_url('settings')" />
<x-backpack::menu-item title="{{__('Accordion texts')}}" icon="la la-question" :link="backpack_url('accordion-text')" />

<x-backpack::menu-item title="{{__('Users')}}" icon="la la-question" :link="backpack_url('user')" />
