<x-layout>
    <x-slot name="header">
        {{ __('DaisyUI') }}
    </x-slot>

    <x-panel>

    <div class="tabs">
        <Link class="tab tab-lifted {{ request()->is('tab/dui/1','daisyui') ? 'tab-active' : null }}" href="{{ route('tab', ['lib'=>'dui','id'=>1]) }}">Tab 1</Link>
        <Link class="tab tab-lifted {{ request()->is('tab/dui/2') ? 'tab-active' : null }}" href="{{ route('tab', ['lib'=>'dui','id'=>2]) }}">Tab 2</Link>
        <Link class="tab tab-lifted {{ request()->is('tab/dui/3') ? 'tab-active' : null }}" href="{{ route('tab', ['lib'=>'dui','id'=>3]) }}">Tab 3</Link>
    </div>

    <div class="tab-content p-3" id="myTabContent">
        @if (request()->is('daisyui')) {{-- can also specify Route::currentRouteName() instead of 'daisyui' --}}
          @include('panels.tab1content')
        @else
          @yield("content")
        @endif
      </div>

    </x-panel>
</x-layout>