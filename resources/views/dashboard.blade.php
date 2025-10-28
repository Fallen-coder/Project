<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Home') }}
            </h2>
            @auth
                <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Post
                </a>
            @endauth
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <header class="flex justify-between items-center py-4 border-b px-6">
                        <h1 class="text-2xl font-bold text-blue-600">Blog Posts</h1>
                        @guest
                            <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800">
                                Login to Create Posts
                            </a>
                        @endguest
                    </header>

                    <!-- Posts grid -->
                    <div class=" mx-auto grid grid-cols-2 gap-6">
                        @foreach($posts->take(3) as $post)
                            <div class="border-square">
                                <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
                                <p class="text-gray-600 mb-4">{{ Str::limit($post->content, 150) }}</p>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{route('posts.index')}}">read more ----></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
