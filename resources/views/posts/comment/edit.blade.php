<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('comment.update', $comment) }}" method="post">
                        @csrf
                        @method('Put')
                        <label for="content">Content: </label>
                        <textarea name="content" class="w-full border border-gray-300 rounded-md p-2 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500" 
                  rows="2" id="content">{{ $comment->content }}</textarea>
                        <br>
                        <br>
                        <input type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
