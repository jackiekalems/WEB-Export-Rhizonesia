@extends('layouts.app')

@section('contact')
    <div class="text-center mt-4">
        <h1 class="text-2xl md:text-4xl text-black font-extrabold py-3 pricing__blog">
            CONTACT <span class="text-green-600">US</span>
        </h1>
        <hr class="my-4 h-1 w-28 bg-red-500 border-0 rounded-full mx-auto">
    </div>
    <div class="flex gap-6 flex-col md:flex-row items-center justify-center w-screen h-screen text-gray-800 p-10 bg-white">
        <!-- Component Start -->
        <div class="flex flex-wrap flex-col gap-6 w-full max-w-6xl">

            <!-- Tile 1 -->
            <div class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-whatsapp-line text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-xl font-semibold">Whatsapp :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">+62 851 0981 8181</span>
                    </div>
                </div>
            </div>

            <!-- Tile 2 -->
            <div class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-mail-line text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-xl font-semibold">Email :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">Wiraloverafii@gmail.com</span>
                    </div>
                </div>
            </div>

            <!-- Tile 3 -->
            <div class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-phone-line text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-xl font-semibold">Telp :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">+62 123 123 123</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- Component End  -->

        <img src="assets/contact_01.jpg" alt="" class="hidden lg:block">

        <!-- Component Start -->
        <div class="flex flex-wrap flex-col gap-6 w-full max-w-6xl">

            <!-- Tile 1 -->
            <div class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-instagram-line text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-xl font-semibold">Instagram :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">@imwira12</span>
                        <a href="" class="text-green-500 text-sm font-semibold ml-2">More..</a>
                    </div>
                </div>
            </div>
            <!-- Tile 2 -->
            <div class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-twitter-x-line text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-xl font-semibold">Twitter :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">@imwira12</span>
                        <a href="" class="text-green-500 text-sm font-semibold ml-2">More..</a>
                    </div>
                </div>
            </div>
            <!-- Tile 3 -->
            <div class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-map-pin-line text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-xl font-semibold">Address</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">Revenue last 30 days</span>
                        <a href="" class="text-green-500 text-sm font-semibold ml-2">More..</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Component End  -->
    </div>
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <form action="https://api.web3forms.com/submit" method="POST" class="space-y-8">
            <input type="hidden" name="access_key" value="aa27db2a-6b0c-4a9b-a518-c93f52db33d4">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-black">Your email</label>
                <input type="email" id="email" name="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="name@example.com" required>
            </div>
            <div>
                <label for="subject" class="block mb-2 text-sm font-medium text-black">Subject</label>
                <input type="text" id="subject" name="subject"
                    class="block p-3 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500"
                    placeholder="Let us know how we can help you" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-black">Your message</label>
                <textarea id="message" rows="6" name="message"
                    class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                    placeholder="Leave a comment..."></textarea>
            </div>
            <div class="flex items-center justify-center my-7">
                <button type="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:outline-none">Send
                    message</button>
            </div>
        </form>
    </div>
@endsection
