<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    @if(!$favorites->isEmpty())
                        <p>
                        <div class ="text-gray-900 dark:text-gray-100 space-y-6">
                        </p>
                        Here are your favorite cards
                        @foreach($favorites as $favorite)

                        <div class ="text-gray-900 dark:text-gray-100 space-y-6">
                            <p>Card ID: {{ $favorite->cardid }}</p>
                            <p>Card Name: {{$favorite->cardname}}</p>
                            <img src="{{ $favorite->image }}" alt="Image for card {{ $favorite->cardid }}">

                        <hr>
                    </div>
                        
                
                        @endforeach
                    </div>
               
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
