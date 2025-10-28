<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
            @auth
                <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Post
                </a>
            @endauth
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if($posts->count())
                        <div class="grid grid-cols-3 gap-4"> 
                            @foreach($posts as $post)
                                <div class="border-square">
                                    <a href="{{ route('posts.show', $post) }}" class="font-bold">{{ $post->title }}</a>
                                    <div class="text-content">
                                        <p class="text-gray-600 mb-4">{!! Str::limit( nl2br(e($post->content)), 150) !!}</p>
                                    </div>
                                    @if(auth()->id() === $post->user_id)
                                        <a href="{{ route('posts.edit', $post) }}">Edit</a>
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No posts yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
