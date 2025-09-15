{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="las la-user" :link="backpack_url('user')" />
<x-backpack::menu-item title="Histories" icon="las la-history" :link="backpack_url('history')" />
<x-backpack::menu-item title="Peerages" icon="las la-award" :link="backpack_url('peerage')" />
<x-backpack::menu-item title="People" icon="las la-user-friends" :link="backpack_url('person')" />
<x-backpack::menu-item title="Regalia Items" icon="las la-trophy" :link="backpack_url('regaliaitem')" />
<x-backpack::menu-item title="Regalia Types" icon="las la-tags" :link="backpack_url('regaliatype')" />

<x-backpack::menu-item title="Relationships" icon="la la-question" :link="backpack_url('relationship')" />