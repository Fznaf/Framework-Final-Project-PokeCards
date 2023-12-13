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
                        <p>Here are your favorite cards:</p>

                        @foreach($favorites as $favorite)
                            <div class="text-gray-900 dark:text-gray-100 space-y-6">
                                <p>Card ID: {{ $favorite->cardid }}</p>
                                <p>Card Name: {{ $favorite->cardname }}</p>
                                <img src="{{ $favorite->image }}" alt="Image for card {{ $favorite->cardid }}">

                                <h2 class="text-lg font-bold mt-4 mb-2">Comments</h2>

                                @forelse($favorite->comments as $comment)
                                    <div class="mb-2">
                                        <p class="text-gray-700">{{ $comment->user->name }} said:</p>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                    <hr>
                                @empty
                                    <p>No comments yet.</p>
                                @endforelse

                                {{-- Comment Box --}}
                                <form method="post" action="{{ route('add.comment') }}">
                                    @csrf
                                    <input type="hidden" name="favorite_list_id" value="{{ $favorite->id }}">
                                    <textarea name="content" placeholder="Add a comment..." rows="2" class="w-full"></textarea>
                                    <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2">Submit Comment</button>
                                </form>
                                {{-- End Comment Box --}}

                            </div>
                        @endforeach
                    @else
                        <p>You don't have any favorite cards yet.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
