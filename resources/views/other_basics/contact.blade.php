<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Contact us') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" >             
                    <p>If you have any questions, feel free to reach out to us:</p>
                    <form action="{{ route('contact.send') }}" method="POST" class="mt-6">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('name',(auth()->user())->name ?? '') }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('email',(auth()->user())->email ?? '') }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700">Message</label>
                            <textarea name="message" id="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Send Message
                        </button>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>