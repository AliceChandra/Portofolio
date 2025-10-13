<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - Futuristic Portfolio</title>
  @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gradient-to-br from-black via-[#050816] to-[#02030a] text-slate-100">
  {{-- Navbar --}}
  <nav class="px-6 py-4 flex justify-between border-b border-slate-800">
    <a href="/" class="font-bold text-cyan-300">Futuristic</a>
    <div class="flex gap-4 text-slate-300">
      <a href="{{ route('about') }}">About</a>
      <a href="{{ route('projects') }}">Projects</a>
      <a href="{{ route('skills') }}">Skills</a>
      <a href="{{ route('timeline') }}">Journey</a>
      <a href="{{ route('contact') }}">Contact</a>
    </div>
  </nav>

  {{-- Page content --}}
  <main class="max-w-6xl mx-auto px-6 py-8">
    @yield('content')
  </main>

  <footer class="text-center text-slate-500 text-sm py-6">
    © {{ date('Y') }} Nama Kamu — Futuristic Portfolio
  </footer>
</body>
</html>