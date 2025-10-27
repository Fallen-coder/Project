<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Home') }}
            </h2>
            @auth
                <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
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
                    <section class="max-w-5xl mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
                        @foreach($posts as $post)
                            <article class="border rounded-lg p-4 hover:shadow-lg transition">
                                <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
                                <p class="text-gray-600 mb-4">{{ Str::limit($post->content, 150) }}</p>
                             
                                <!-- Comments section -->
                                <div class="mt-4 border-t pt-4">
                                    <h4 class="font-semibold mb-2">Comments</h4>
                                    @foreach($post->comments as $comment)
                                        <div class="text-sm text-gray-600 mb-2">
                                            {{ $comment->content }}
                                        </div>
                                    @endforeach
                            @endforeach   
  </article>



  <!-- Add more posts -->
</section>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
