<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/posts" method="post">
                        @csrf
                        <label for="title">Title: </label>
                        <input type="text" id="title"  class="w-1/2 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                  rows="2" name="title" value="{{ old('title') }}">
                        <br>
                        <label for="content">Content: </label>
                        <textarea name="content" id="content"  class="w-full border border-gray-300 rounded-md p-2 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500" 
                  rows="2" value="{{ old('content') }}"></textarea>
                        <br>
                        <input type="submit" value="Create">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>