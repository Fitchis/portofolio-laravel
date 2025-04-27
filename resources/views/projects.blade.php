@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="max-w-6xl mx-auto space-y-8 px-4">
        <h1 class="text-4xl font-bold text-center text-gray-800">My Projects</h1>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
            @foreach ($projects as $project)
                <div
                    class="group relative p-6 bg-white rounded-lg shadow-lg hover:shadow-2xl transition-transform duration-300 hover:scale-105 transform hover:-translate-y-2 border border-transparent hover:border-blue-300">
                    <!-- Gambar proyek -->
                    <div class="h-48 w-full bg-gray-200 rounded-md overflow-hidden mb-4">
                        <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}"
                            class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105 group-hover:opacity-80">
                    </div>
                    <!-- Judul proyek -->
                    <h2
                        class="text-2xl font-semibold text-gray-800 group-hover:text-blue-500 transition-all duration-300 ease-in-out">
                        {{ $project['title'] }}
                    </h2>
                    <!-- Deskripsi proyek -->
                    <p class="mt-2 text-gray-600 group-hover:text-gray-800 transition-all duration-300 ease-in-out">
                        {{ $project['description'] }}
                    </p>
                    <!-- Tautan untuk melihat proyek -->
                    <a href="{{ $project['link'] }}"
                        class="text-blue-500 hover:text-blue-700 hover:underline mt-4 inline-block transition-all duration-300 ease-in-out">
                        View Project →
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
