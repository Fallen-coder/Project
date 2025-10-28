<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                {{ __('About us') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 " >
                <!-- this was nightmare because npm run build needed rerun so created custom classs!!!! -->
                    <p class="about">Welcome to our website! We are dedicated to providing you with the best experience possible. <br>
                        Our team works hard to bring you quality content and services. Thank you for visiting us! <br>

                Feel free to explore our site and learn more about what we have to offer. <br>
                Our mission is to deliver value and exceed your expectations. <br>
                Contact us if you have any questions or feedback!</p >


                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>