<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang di Aplikasi Baru Saya! 🎉</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Di atas adalah cara modern untuk menyertakan aset dengan Vite di Laravel 9+.
         Jika Anda tidak menggunakan Vite atau Laravel versi lama, Anda mungkin perlu:
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    --}}

    <style>
        /* Anda bisa menambahkan CSS kustom Anda di sini */
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #1a202c; /* Warna latar belakang gelap */
            color: #e2e8f0; /* Warna teks terang */
            display: flex;
            flex-direction: column; /* Mengatur tata letak vertikal */
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
        }
        .container-custom {
            padding: 2.5rem; /* padding: 40px */
            background-color: #2d3748; /* Warna latar belakang kontainer */
            border-radius: 0.75rem; /* border-radius: 12px */
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2); /* shadow lebih kuat */
            max-width: 600px;
            width: 90%;
            box-sizing: border-box;
            margin-top: 50px; /* Jarak dari atas untuk memberi ruang navbar */
        }
        h1 {
            color: #63b3ed; /* Biru muda */
            font-size: 2.5rem; /* Ukuran font lebih besar */
            margin-bottom: 1.5rem; /* margin-bottom: 24px */
        }
        p {
            font-size: 1.125rem; /* Ukuran font: 18px */
            line-height: 1.75;
            margin-bottom: 1.5rem;
        }
        .button-link {
            display: inline-block;
            margin: 0.5rem; /* margin: 8px */
            padding: 0.75rem 1.5rem; /* padding: 12px 24px */
            background-color: #63b3ed;
            color: white;
            text-decoration: none;
            border-radius: 0.375rem; /* border-radius: 6px */
            transition: background-color 0.3s ease;
            font-weight: 600;
        }
        .button-link:hover {
            background-color: #4299e1;
        }
        /* Style untuk navigasi login/register di pojok kanan atas */
        .auth-links {
            position: fixed;
            top: 1.5rem; /* top: 24px */
            right: 1.5rem; /* right: 24px */
            z-index: 10;
        }
        .auth-links a {
            color: #cbd5e0; /* Warna teks abu-abu terang */
            font-weight: 600;
            text-decoration: none;
            margin-left: 1rem; /* margin-left: 16px */
            transition: color 0.3s ease;
        }
        .auth-links a:hover {
            color: #ffffff; /* Warna teks putih saat hover */
        }
    </style>
</head>
<body>
    <div class="auth-links">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </div>

    <div class="container-custom">
        <h1>Selamat Datang di Aplikasi Keren Saya! ✨</h1>
        <p>Ini adalah halaman selamat datang!</p>
        <p>Kami sangat senang Anda ada di sini, login dulu kali bang!</p>
        <a href="{{ route('login') }}" class="button-link">Login</a>
        <a href="{{ route('register') }}" class="button-link">Register</a>
        <!-- <a href="https://laravel.com/docs" target="_blank" class="button-link" style="background-color: #c53030;">Lihat Dokumentasi Laravel</a> -->
    </div>

    <!-- <div class="mt-16 text-center text-sm text-gray-500 dark:text-gray-400">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div> -->
</body>
</html>