<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects - Futuristic Portfolio</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Custom Tailwind Config -->
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
  <link rel="stylesheet" href="{{ asset('css/projects.style.css') }}">
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-[#050016] to-[#090020] text-white font-sans overflow-x-hidden">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-10 py-6 bg-black/30 backdrop-blur-md border-b border-cyber fixed top-0 w-full z-50">
    <a href="/" class="text-2xl font-bold text-neon tracking-widest">Futuristic<span class="text-cyber">AI</span></a>
    <div class="space-x-8 text-slate-300">
      <a href="/" class="hover:text-neon transition">Home</a>
      <a href="/about" class="hover:text-neon transition">About</a>
      <a href="/projects" class="text-cyber font-semibold">Projects</a>
      <a href="/skills" class="hover:text-neon transition">Skills</a>
      <a href="/journey" class="hover:text-neon transition">Journey</a>
      <a href="/contacts" class="hover:text-neon transition">Contacts</a>
    </div>
  </nav>

  <!-- Projects Section -->
  <section class="pt-40 pb-24 px-10 max-w-6xl mx-auto">
    <h1 class="text-5xl font-extrabold text-center mb-12 opacity-0 fade-up">
      <span class="text-cyber">My</span> <span class="text-neon">Projects</span> ⚙️
    </h1>

    <p class="text-center text-slate-400 text-lg max-w-2xl mx-auto mb-16 opacity-0 fade-up delay-200">
      A collection of <span class="text-neon font-semibold">futuristic</span> creations blending AI, design, and innovation.
    </p>

    <!-- Projects Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-12">

      <!-- Project Card 1 -->
      <div class="project-card opacity-0 fade-up delay-300">
        <img src="https://images.unsplash.com/photo-1523473827534-86c92985cfb4?auto=format&fit=crop&w=800&q=60"
             alt="AI Chatbot" class="project-img">
        <div class="project-content">
          <h2 class="project-title text-cyber">AI Chatbot Assistant</h2>
          <p class="project-desc">Conversational AI built with Laravel + OpenAI API for adaptive communication.</p>
          <a href="#" class="project-link">🔗 View Project</a>
        </div>
      </div>

      <!-- Project Card 2 -->
      <div class="project-card opacity-0 fade-up delay-400">
        <img src="https://images.unsplash.com/photo-1581092334495-9b6c028e8b85?auto=format&fit=crop&w=800&q=60"
             alt="Futuristic Portfolio" class="project-img">
        <div class="project-content">
          <h2 class="project-title text-neon">Futuristic Portfolio</h2>
          <p class="project-desc">A neon-themed personal portfolio with Blade templating and glowing 3D UI.</p>
          <a href="#" class="project-link">🔗 View Project</a>
        </div>
      </div>

      <!-- Project Card 3 -->
      <div class="project-card opacity-0 fade-up delay-500">
        <img src="https://images.unsplash.com/photo-1581093588401-22e8d3f5c57c?auto=format&fit=crop&w=800&q=60"
             alt="Dashboard" class="project-img">
        <div class="project-content">
          <h2 class="project-title text-cyber">Cyber Dashboard</h2>
          <p class="project-desc">A futuristic analytics dashboard powered by Laravel + TailwindCSS.</p>
          <a href="#" class="project-link">🔗 View Project</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 border-t border-cyber/20 text-slate-500">
    © 2025 Alice Chandra — Innovating the Future 💫
  </footer>

  <!-- Fade-in Animation Script -->
  <script>
    const faders = document.querySelectorAll('.fade-up');
    const appearOptions = { threshold: 0.2 };
    const appearOnScroll = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      });
    }, appearOptions);
    faders.forEach(fader => appearOnScroll.observe(fader));
  </script>

</body>
</html>