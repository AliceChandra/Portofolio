<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me - Futuristic Portfolio</title>

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

  <!-- Custom CSS -->
  @vite('resources/css/navbars/about.style.css')
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-[#050816] to-[#02030a] text-slate-100 font-sans overflow-x-hidden">

  <!-- Navbar (SAMA PERSIS DENGAN HOME) -->
  <nav class="flex justify-between items-center px-10 py-6 bg-black/30 backdrop-blur-md border-b border-cyber fixed top-0 w-full z-50">
    <a href="/" class="text-2xl font-bold text-neon tracking-widest">
      Futuristic<span class="text-cyber">AI</span>
    </a>

    <div class="space-x-8 text-slate-300">
      <a href="/" class="hover:text-neon transition">Home</a>
      <a href="/about" class="text-cyber font-semibold">About</a>
      <a href="/projects" class="hover:text-neon transition">Projects</a>
      <a href="/skills" class="hover:text-neon transition">Skills</a>
      <a href="/journey" class="hover:text-neon transition">Journey</a>
      <a href="/contacts" class="hover:text-neon transition">Contacts</a>
    </div>
  </nav>

  <!-- Cyber Grid Background -->
  <div class="cyber-grid"></div>

  <!-- ABOUT SECTION -->
  <section class="max-w-6xl mx-auto pt-40 pb-24 px-10 flex flex-col md:flex-row items-center gap-10 relative z-10">

    <!-- Profile Image -->
    <div class="md:w-1/3 flex justify-center">
      <img src="{{ asset('images/Pas Foto.jpg') }}"
           alt="Alice Chandra Profile Photo"
           class="rounded-2xl shadow-[0_0_40px_#00ffff55] hover:shadow-[0_0_60px_#8b5cf655]
                  transition-all duration-500 w-72 md:w-96 object-cover border-2 border-cyber/40">
    </div>

    <!-- Info Section -->
    <div class="md:w-2/3 space-y-8">
      <h1 class="text-5xl font-extrabold text-neon">About Me</h1>
      <h2 class="text-cyber text-xl font-semibold">AI Developer • Futuristic Designer</h2>

      <p class="text-slate-400 leading-relaxed text-lg">
        Hi, I’m <span class="text-neon font-semibold">Alice Chandra</span> —
        a developer passionate about
        <span class="text-cyber">artificial intelligence, creative coding, and futuristic design</span>.
      </p>

      <!-- Biodata -->
      <div class="biodata">
        <h3 class="text-2xl font-bold text-cyber mb-4">Biodata 🧬</h3>
        <div class="grid md:grid-cols-2 gap-4 text-slate-300">
          <p><strong class="text-neon">Full Name:</strong> Alice Chandra</p>
          <p><strong class="text-neon">Sex:</strong> Female</p>
          <p><strong class="text-neon">Status:</strong> Active Student</p>
          <p><strong class="text-neon">Religion:</strong> Christian</p>
          <p><strong class="text-neon">Date of Birth:</strong> 18 March 2005</p>
          <p><strong class="text-neon">NIM:</strong> 2702267943</p>
          <p><strong class="text-neon">Major:</strong> Master Track of IT</p>
          <p><strong class="text-neon">Email:</strong> alice.chandra@binus.ac.id</p>
        </div>
      </div>

      <!-- Personality Traits -->
      <div class="personality mt-10">
        <h3 class="text-2xl font-bold text-cyber mb-4">Personality Traits ⚙️</h3>
        <ul class="grid sm:grid-cols-2 gap-4 text-slate-400 list-disc list-inside">
          <li>Responsible with team works</li>
          <li>Having an excellent work with others in a team and study group</li>
          <li>Highly interested in creativity</li>
          <li>Able to contribute achievements through hobbies, interests, and talents</li>
          <li>Pleasant, adaptable, and helpful personalities</li>
          <li>Persistent in studying subjects related to my field</li>
        </ul>
      </div>

      <!-- Hobbies -->
      <div class="hobbies mt-10">
        <h3 class="text-2xl font-bold text-cyber mb-4">Hobbies 🎮</h3>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 text-slate-300">
          <div class="hobby-card">💻 Coding</div>
          <div class="hobby-card">🎮 Gaming</div>
          <div class="hobby-card">⚽ Soccer</div>
          <div class="hobby-card">🏀 Basketball</div>
          <div class="hobby-card">🎬 Video Editing</div>
          <div class="hobby-card">🎨 Designing</div>
        </div>
      </div>
      <!-- Quote -->
      <blockquote class="mt-8 text-slate-400 italic border-l-4 border-cyber pl-4">
        “Life is like a football game, sometimes we win them sometimes we lose them
        if we didn’t prepare it properly.”
      </blockquote>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 border-t border-cyber/20 text-slate-500">
    © 2025 Alice Chandra — Crafted with 💜 & Cyber Vision
  </footer>

</body>
</html>