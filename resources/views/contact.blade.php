@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="max-w-2xl mx-auto text-center space-y-6 px-4 py-12">
        <h1 class="text-4xl font-bold text-gray-800">Contact Me</h1>
        <p class="text-lg text-gray-600">Feel free to reach out! I'd love to hear from you.</p>

        <!-- Formulir Kontak -->
        <form action="https://formspree.io/f/mdkgkwgw" method="POST" class="space-y-6">
            <!-- Email Input -->
            <input type="email" name="email" placeholder="Your Email"
                class="w-full p-4 rounded-md border border-gray-300 focus:ring-2 focus:ring-gray-500 transition duration-300 ease-in-out"
                required>

            <!-- Message Textarea -->
            <textarea name="message" placeholder="Your Message"
                class="w-full p-4 rounded-md border border-gray-300 focus:ring-2 focus:ring-gray-500 transition duration-300 ease-in-out"
                rows="6" required></textarea>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-gray-600 text-white px-6 py-3 rounded-full shadow-md hover:bg-gray-700 transition-all duration-300 transform hover:scale-105">
                Send Message
            </button>
        </form>

        <!-- Success/Error Notification -->
        <div id="notification" class="mt-4 hidden">
            <p class="text-green-500" id="success-message">Your message has been sent successfully!</p>
            <p class="text-red-500" id="error-message">There was an error. Please try again later.</p>
        </div>
    </div>
@endsection
