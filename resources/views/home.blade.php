@extends('components.app')

@section('title', 'Home')

    @section('content')
              <!-- Main Content -->
    <div class="flex items-center justify-center h-screen bg-gray-100">
      <div class="text-center">
          <h1 class="text-5xl font-bold text-gray-900">Selamat Datang di Aplikasi Kami</h1>
          <p class="mt-4 text-lg text-gray-700">Aplikasi ini dirancang untuk membantu Anda mengelola informasi dengan mudah dan efisien.</p>
          <div class="mt-6">
              <a href="{{route('Contact/Mahasiswa')}}" class="inline-block px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700">Lihat Kontak</a>
              <a href="{{route('login')}}" class="inline-block px-6 py-3 text-white bg-green-600 rounded-lg hover:bg-green-700">Login Sekarang</a>
          </div>
      </div>
  </div>
      
    @endsection