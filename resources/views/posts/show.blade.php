<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __( $post->title) }}
        </h2>
            @auth
                <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Post
                </a>
            @endauth
        </div>
    </x-slot>

    <div class="py-22">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <div class="whitespace-pre-line">{!! nl2br(e($post->content)) !!}</div>
                    </div>
                    <hr>
                    <h2 class="mt-6 mb-4 text-xl font-semibold">Comments:</h2>

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
                        <hr>
                        <ul>
                            
                            @foreach($post->comments as $comment)
                                <li>{{ $comment->content }} </li>
                                <li>author: {{ $comment->user->name  }} </li>
                                @if(auth()->id() === $comment->user_id)
                    <a href="{{ route('comment.edit', $comment) }}">Edit</a>
                    <form action="{{ route('comment.destroy', $comment) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                                
                                @endif
                                <hr>
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