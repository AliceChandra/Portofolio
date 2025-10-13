<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skills - Futuristic Portfolio</title>

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
  <link rel="stylesheet" href="{{ asset('css/skills.style.css') }}">
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-[#050016] to-[#090020] text-white font-sans overflow-x-hidden">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-10 py-6 bg-black/30 backdrop-blur-md border-b border-cyber fixed top-0 w-full z-50">
    <a href="/" class="text-2xl font-bold text-neon tracking-widest">Futuristic<span class="text-cyber">AI</span></a>
    <div class="space-x-8 text-slate-300">
      <a href="/" class="hover:text-neon transition">Home</a>
      <a href="/about" class="hover:text-neon transition">About</a>
      <a href="/projects" class="hover:text-neon transition">Projects</a>
      <a href="/skills" class="text-cyber font-semibold">Skills</a>
      <a href="/journey" class="hover:text-neon transition">Journey</a>
      <a href="/contacts" class="hover:text-neon transition">Contacts</a>
    </div>
  </nav>

  <!-- Skills Section -->
  <section class="pt-40 pb-24 px-10 text-center max-w-6xl mx-auto">
    <h1 class="text-5xl font-extrabold mb-6">
      <span class="text-cyber">My</span> <span class="text-neon">Skills</span> ⚡
    </h1>
    <p class="text-slate-400 max-w-2xl mx-auto text-lg mb-16">
      A showcase of my hard technical expertise and the soft interpersonal strengths that drive my futuristic creations.
    </p>

    <!-- HARD SKILLS -->
    <div class="mb-20">
      <h2 class="text-3xl font-bold text-cyber mb-10">Hard Skills 💻</h2>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
        <div class="skill-card">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" class="icon" alt="Laravel">
          <h3 class="skill-title text-neon">Laravel</h3>
          <p>Backend framework for modern web applications with Blade and MVC.</p>
        </div>

        <div class="skill-card">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="icon" alt="JavaScript">
          <h3 class="skill-title text-cyber">JavaScript</h3>
          <p>Brings interactivity and dynamic logic to futuristic web apps.</p>
        </div>

        <div class="skill-card">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" class="icon" alt="Python">
          <h3 class="skill-title text-neon">Python</h3>
          <p>Used for AI, data analysis, and automation of digital workflows.</p>
        </div>

        <div class="skill-card">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" class="icon" alt="Java">
          <h3 class="skill-title text-cyber">Java</h3>
          <p>Object-oriented language for scalable backend systems.</p>
        </div>

        <div class="skill-card">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg" class="icon" alt="C">
          <h3 class="skill-title text-neon">C Language</h3>
          <p>Low-level performance programming with memory-level control.</p>
        </div>

        <div class="skill-card">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="icon" alt="SQL">
          <h3 class="skill-title text-cyber">SQL Database</h3>
          <p>Efficient data handling and structured storage for large systems.</p>
        </div>
      </div>
    </div>

    <!-- SOFT SKILLS -->
    <div>
      <h2 class="text-3xl font-bold text-neon mb-10">Soft Skills 🤝</h2>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
        <div class="skill-card soft">
          <h3 class="skill-title text-cyber">Leadership</h3>
          <p>Guiding teams through collaboration, communication, and shared vision.</p>
        </div>

        <div class="skill-card soft">
          <h3 class="skill-title text-neon">Teamwork</h3>
          <p>Working effectively in multidisciplinary environments with empathy and clarity.</p>
        </div>

        <div class="skill-card soft">
          <h3 class="skill-title text-cyber">Problem Solving</h3>
          <p>Finding creative solutions under constraints using critical thinking.</p>
        </div>

        <div class="skill-card soft">
          <h3 class="skill-title text-neon">Adaptability</h3>
          <p>Thrives in fast-paced environments and learns new technologies quickly.</p>
        </div>

        <div class="skill-card soft">
          <h3 class="skill-title text-cyber">Communication</h3>
          <p>Clear and confident presentation of ideas across technical and creative fields.</p>
        </div>

        <div class="skill-card soft">
          <h3 class="skill-title text-neon">Creativity</h3>
          <p>Blending art, logic, and technology into visionary digital designs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 border-t border-cyber/20 text-slate-500">
    © 2025 Alice Chandra — Crafted with 💜 & Cyber Vision
  </footer>

</body>
</html>