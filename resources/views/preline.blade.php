<x-layout>
    <x-slot name="header">
        {{ __('Preline') }}
    </x-slot>

    <x-panel>

    <div class="border-b border-gray-200 dark:border-gray-700">
      <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
        <Link href="{{ route('tab', ['lib'=>'prl','id'=>1]) }}" data-hs-tab="#myTabContent" class="hs-tab-active:bg-white hs-tab-active:!border-b-transparent hs-tab-active:text-blue-600 dark:hs-tab-active:bg-gray-800 dark:hs-tab-active:border-b-gray-800 dark:hs-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 {{ request()->is('tab/prl/1','preline') ? 'active' : 'dark:hover:text-gray-300'}}" role="tab">
          Tab 1
        </Link>
        <Link href="{{ route('tab', ['lib'=>'prl','id'=>2]) }}" data-hs-tab="#myTabContent" class="hs-tab-active:bg-white hs-tab-active:!border-b-transparent hs-tab-active:text-blue-600 dark:hs-tab-active:bg-gray-800 dark:hs-tab-active:border-b-gray-800 dark:hs-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 {{ request()->is('tab/prl/2') ? 'active' : 'dark:hover:text-gray-300'}}" role="tab">
          Tab 2
        </Link>
        <Link href="{{ route('tab', ['lib'=>'prl','id'=>3]) }}" data-hs-tab="#myTabContent" class="hs-tab-active:bg-white hs-tab-active:!border-b-transparent hs-tab-active:text-blue-600 dark:hs-tab-active:bg-gray-800 dark:hs-tab-active:border-b-gray-800 dark:hs-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 {{ request()->is('tab/prl/3') ? 'active' : 'dark:hover:text-gray-300'}}" role="tab">
          Tab 3
        </Link>
      </nav>
    </div>

    <div class="tab-content p-3" id="myTabContent">
        @if (request()->is('preline')) {{-- can also specify Route::currentRouteName() instead of 'preline' --}}
          @include('panels.tab1content')
        @else
          @yield("content")
        @endif
      </div>

    </x-panel>
</x-layout>