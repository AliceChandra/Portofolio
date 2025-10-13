<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects - Futuristic Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/projects.style.css') }}">
</head>

<body class="min-h-screen bg-gradient-to-br from-[#020012] via-[#070022] to-[#0b002e] text-slate-100 font-sans relative overflow-hidden">

  <!-- Animated background grid -->
  <div class="cyber-grid"></div>

  <!-- Navbar -->
  <nav class="px-8 py-5 flex justify-between items-center border-b border-cyan-800/40 bg-black/40 backdrop-blur-md sticky top-0 z-50 shadow-md shadow-cyan-800/10">
    <a href="/" class="font-extrabold text-cyan-400 tracking-wider text-lg hover:text-fuchsia-400 transition">
      FUTURE<span class="text-fuchsia-400">TECH</span>
    </a>
    <div class="flex gap-6 text-slate-300 font-medium">
      <a href="/" class="hover:text-cyan-400">Home</a>
      <a href="/about" class="hover:text-cyan-400">About</a>
      <a href="/projects" class="text-fuchsia-400 border-b-2 border-fuchsia-400 pb-1">Projects</a>
      <a href="/skills" class="hover:text-cyan-400">Skills</a>
      <a href="/journey" class="hover:text-cyan-400">Journey</a>
      <a href="/contacts" class="hover:text-cyan-400">Contacts</a>
    </div>
  </nav>

  <!-- Projects Section -->
  <main class="max-w-7xl mx-auto px-8 py-20 relative z-10">
    <div class="text-center mb-16">
      <h1 class="text-5xl font-extrabold text-cyan-400 glow">My Projects</h1>
      <div class="divider mx-auto mt-4"></div>
      <p class="mt-4 text-slate-400 text-lg max-w-2xl mx-auto">
        Each project is a fusion of design precision, AI intelligence, and futuristic vision ⚙️
      </p>
    </div>

    <!-- Grid of Projects -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-12">
      
      <!-- Project 1 -->
      <div class="project-card group">
        <div class="card-content">
          <img src="https://images.unsplash.com/photo-1523473827534-86c92985cfb4?auto=format&fit=crop&w=800&q=60"
               alt="AI Chatbot" class="project-img">
          <h2 class="project-title">AI Chatbot Assistant</h2>
          <p class="project-desc">Conversational AI built with Laravel + OpenAI API for adaptive communication.</p>
          <a href="#" class="project-link">🔗 View Project</a>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="project-card group">
        <div class="card-content">
          <img src="https://images.unsplash.com/photo-1581092334495-9b6c028e8b85?auto=format&fit=crop&w=800&q=60"
               alt="Portfolio" class="project-img">
          <h2 class="project-title">Futuristic Portfolio</h2>
          <p class="project-desc">A neon-themed personal portfolio with Blade templating and 3D hover UI.</p>
          <a href="#" class="project-link">🔗 View Project</a>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="project-card group">
        <div class="card-content">
          <img src="https://images.unsplash.com/photo-1581093588401-22e8d3f5c57c?auto=format&fit=crop&w=800&q=60"
               alt="Dashboard" class="project-img">
          <h2 class="project-title">Cyber Dashboard</h2>
          <p class="project-desc">A futuristic analytics dashboard powered by Laravel + Tailwind.</p>
          <a href="#" class="project-link">🔗 View Project</a>
        </div>
      </div>

    </div>
  </main>

  <!-- Footer -->
  <footer class="text-center text-slate-500 text-sm py-6 border-t border-cyan-800/40 mt-20">
    © 2025 Alice Chandra — Crafted with 💜 Cyber Vision
  </footer>
</body>
</html>