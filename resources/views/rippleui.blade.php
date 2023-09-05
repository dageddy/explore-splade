<x-layout>
    <x-slot name="header">
        {{ __('RippleUI') }}
    </x-slot>

    <x-panel>

      <div class="tabs gap-1">
        <div class="tab tab-pill {{ request()->is('tab/rui/1','rippleui') ? 'tab-active' : ''}}"><Link href="{{ route('tab', ['lib'=>'rui','id'=>1]) }}">Tab 1</Link></div>
        <div class="tab tab-pill {{ request()->is('tab/rui/2') ? 'tab-active' : ''}}"><Link href="{{ route('tab', ['lib'=>'rui','id'=>2]) }}">Tab 2</Link></div>
        <div class="tab tab-pill {{ request()->is('tab/rui/3') ? 'tab-active' : ''}}"><Link href="{{ route('tab', ['lib'=>'rui','id'=>3]) }}">Tab 3</Link></div>
      </div>

      <div class="tab-content p-3" id="myTabContent">
        @if (request()->is('rippleui')) {{-- can also specify Route::currentRouteName() instead of 'flowbite' --}}
          @include('panels.tab1content')
        @else
          @yield("content")
        @endif
      </div>

    </x-panel>
</x-layout>