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
                    <h1>Title: {{ $post->title }}</h1>
                    <p>Content: {{ $post->content }}</p>
                    <br>
                    <hr>
                    <h2>Comments:</h2>

                    <form action="{{ route('comments.store', $post) }}" method="post" display="inline">
                        @csrf
                       
                        <textarea name="content" 
                  placeholder="Add a public comment..." 
                  class="w-full border border-gray-300 rounded-md p-2 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500" 
                  rows="2">{{ old('content') }}</textarea>
                        <br>
                        <input type="submit" value="Comment">
                    </form>
                    <br>
                    @if($post->comments->count())
                        
                        <ul>
                            @foreach($post->comments as $comment)
                                <li>{{ $comment->content }} </li>
                                <li>author: {{ $comment->user->name  }} </li>
                            @endforeach
                        </ul>
                        <br>
                        
                    @else
                        <p>No comments yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>