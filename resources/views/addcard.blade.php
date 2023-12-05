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
                    <form action="" method="post" enctype="multipart/form-data"class="flex flex-col space-x-4">
                    @csrf
                    Pokemon Name
                    <input type="text" name="pokemonName" placeholder="Pokemon Name" class = "text-black dark:text-black">
                    Pokemon ID
                    <input type="text" name="pokemonID" placeholder="Pokemon ID" class = "text-black dark:text-black">
                    Card Image
                    <input type="file" name="image" accept="image/*" placeholder="Select Card Image">
                    <button type="submit" name="submit" Value="Input" class="py-2 px-4 bg-blue-500 text-white rounded">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
