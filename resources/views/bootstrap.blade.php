<x-layout>
    <x-slot name="header">
        {{ __('Bootstrap') }}
    </x-slot>

    <x-panel>

    <div class="container mt-2">

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <Link class="nav-link {{ request()->is('tab/bs/1', 'bootstrap') ? 'active' : null }}" href="{{ route('tab', ['lib'=>'bs','id'=>1]) }}">Tab1</Link>
        </li>
        <li class="nav-item" role="presentation">
          <Link class="nav-link {{ request()->is('tab/bs/2') ? 'active' : null }}" href="{{ route('tab', ['lib'=>'bs','id'=>2]) }}">Tab2</Link>
        </li>
        <li class="nav-item" role="presentation">
          <Link class="nav-link {{ request()->is('tab/bs/3') ? 'active' : null }}" href="{{ route('tab', ['lib'=>'bs','id'=>3]) }}">Tab3</Link>
        </li>
      </ul>
      <div class="tab-content p-3" id="myTabContent">
      @yield("content")
      </div>
    </div>

    </x-panel>
</x-layout>


