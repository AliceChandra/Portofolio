<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Page Title --}}
    <title>@yield('title', 'Home') - Futuristic Portfolio</title>

    {{-- CSRF --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-[#050816] to-[#02030a] text-slate-100">

    {{-- Navbar --}}
    <nav class="px-6 py-4 flex justify-between items-center border-b border-slate-800">
        <a href="{{ route('pages.home') }}" class="font-bold text-cyan-300">
            Futuristic
        </a>

        <div class="flex gap-6 text-slate-300">
          <a href="{{ route('pages.about') }}" class="hover:text-cyan-300 transition">About</a>
          <a href="{{ route('pages.projects') }}" class="hover:text-cyan-300 transition">Projects</a>
          <a href="{{ route('pages.skills') }}" class="hover:text-cyan-300 transition">Skills</a>
          <a href="{{ route('pages.journey') }}" class="hover:text-cyan-300 transition">Journey</a>
          <a href="{{ route('pages.contacts') }}" class="hover:text-cyan-300 transition">Contact</a>
        </div>
    </nav>

    {{-- Page Content --}}
    <main class="max-w-6xl mx-auto px-6 py-10">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-center text-slate-500 text-sm py-6 border-t border-slate-800">
        © {{ date('Y') }} Alice Chandra — Futuristic Portfolio
    </footer>

    {{-- Extra Scripts --}}
    @stack('scripts')

</body>
</html>