<x-layout>
    <x-slot name="header">
        {{ __('Flowbite') }}
    </x-slot>

    <x-panel>

      <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
          <li class="mr-2">
              <Link href="{{ route('tab', ['lib'=>'fb','id'=>1]) }}" class="inline-block p-4 {{ request()->is('tab/fb/1','flowbite') ? 'text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500' : 'rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300' }}">Tab 1</Link>
          </li>
          <li class="mr-2">
              <Link href="{{ route('tab', ['lib'=>'fb','id'=>2]) }}" class="inline-block p-4 {{ request()->is('tab/fb/2') ? 'text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500' : 'rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300' }}">Tab 2</Link>
          </li>
          <li class="mr-2">
              <Link href="{{ route('tab', ['lib'=>'fb','id'=>3]) }}" class="inline-block p-4 {{ request()->is('tab/fb/3') ? 'text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500' : 'rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300' }}">Tab 3</Link>
          </li>
      </ul>

      <div class="tab-content p-3" id="myTabContent">
        @if (request()->is('flowbite')) {{-- can also specify Route::currentRouteName() instead of 'flowbite' --}}
          @include('panels.tab1content')
        @else
          @yield("content")
        @endif
      </div>

    </x-panel>
</x-layout>