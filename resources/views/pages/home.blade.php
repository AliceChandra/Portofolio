<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Futuristic Portfolio</title>

  <!-- Tailwind Official CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Custom Theme Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            neon: '#00ffff',
            cyber: '#8b5cf6',
            darkbg: '#030014',
          }
        }
      }
    }
  </script>
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-[#050016] to-[#090020] text-white font-sans overflow-x-hidden">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-10 py-6 bg-black/30 backdrop-blur-md border-b border-cyber fixed top-0 w-full z-50">
    <a href="/" class="text-2xl font-bold text-neon tracking-widest">Futuristic<span class="text-cyber">AI</span></a>
    <div class="space-x-8 text-slate-300">
      <a href="/" class="text-cyber font-semibold">Home</a>
      <a href="/about" class="hover:text-neon transition">About</a>
      <a href="/projects" class="hover:text-neon transition">Projects</a>
      <a href="/skills" class="hover:text-neon transition">Skills</a>
      <a href="/journey" class="hover:text-neon transition">Journey</a>
      <a href="/contacts" class="hover:text-neon transition">Contacts</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="relative flex flex-col lg:flex-row items-center justify-between px-10 pt-40 pb-24 overflow-hidden">

    <!-- Left Content -->
    <div class="lg:w-1/2 space-y-6">
      <h1 class="text-5xl lg:text-6xl font-extrabold leading-tight">
        <span class="text-cyber">Innovating the Future</span><br>
        With <span class="text-neon">Technology & Imagination</span>
      </h1>
      <p class="text-slate-300 text-lg max-w-md">
        I’m passionate about creating next-generation experiences powered by AI, AR/VR, and interactive design. 
        Step into the future 🚀
      </p>
      <div class="mt-6 flex gap-4">
        <a href="/projects" class="px-6 py-3 bg-gradient-to-r from-cyan-500 to-purple-600 rounded-lg font-semibold hover:scale-105 hover:shadow-[0_0_20px_#00ffff66] transition">Explore Projects →</a>
        <a href="/contacts" class="px-6 py-3 border border-neon rounded-lg text-neon hover:bg-neon hover:text-black transition">Contact Me</a>
      </div>
    </div>

    <!-- Right Image -->
    <div class="lg:w-1/2 mt-16 lg:mt-0 relative">
      <img src="https://cdn.dribbble.com/users/2113376/screenshots/15244986/media/63aaf99868b3e7eaa16e083cb60e66ad.png"
           alt="Futuristic Tech"
           class="rounded-2xl shadow-[0_0_40px_#00ffff55] w-full">
      <div class="absolute inset-0 bg-gradient-to-br from-cyber/20 to-neon/10 blur-3xl"></div>
    </div>
  </section>

  <!-- About Teaser -->
  <section class="text-center py-20 border-t border-cyber/20">
    <h2 class="text-3xl font-bold text-cyber mb-4">Who Am I?</h2>
    <p class="max-w-3xl mx-auto text-slate-400 leading-relaxed px-6">
      I’m <span class="text-neon font-semibold">Alice Chandra</span>, a developer blending art and science through code.  
      My journey is about building meaningful digital worlds — from immersive web apps to smart AI systems.
    </p>
    <a href="/about" class="mt-6 inline-block px-6 py-3 bg-gradient-to-r from-cyber to-neon rounded-lg text-black font-semibold hover:scale-105 transition">More About Me</a>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 border-t border-cyber/20 text-slate-500">
    © 2025 Alice Chandra — Crafted with 💜 & Cyber Vision
  </footer>

</body>
</html>
