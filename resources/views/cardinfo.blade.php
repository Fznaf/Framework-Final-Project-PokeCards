<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cards') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($cards as $card)
                    <div class="text-gray-900 dark:text-gray-100 space-y-6">
                        <h2>{{$card['name']}}</h2>
                        {{$card['id']}}
                        <img src="{{ $card['images']['small'] }}" alt = "{{__("Card Picture")}}">
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>