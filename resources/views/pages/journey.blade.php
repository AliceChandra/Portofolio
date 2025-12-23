<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Journey - Futuristic Portfolio</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
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

  <link rel="stylesheet" href="{{ asset('css/journey.style.css') }}">
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-[#050016] to-[#090020] text-white font-sans overflow-x-hidden">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-10 py-6 bg-black/30 backdrop-blur-md border-b border-cyber fixed top-0 w-full z-50">
    <a href="/" class="text-2xl font-bold text-neon tracking-widest">Futuristic<span class="text-cyber">AI</span></a>
    <div class="space-x-8 text-slate-300">
      <a href="/" class="hover:text-neon transition">Home</a>
      <a href="/about" class="hover:text-neon transition">About</a>
      <a href="/projects" class="hover:text-neon transition">Projects</a>
      <a href="/skills" class="hover:text-neon transition">Skills</a>
      <a href="/journey" class="text-cyber font-semibold">Journey</a>
      <a href="/contacts" class="hover:text-neon transition">Contacts</a>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="pt-40 pb-24 px-6 md:px-16 max-w-6xl mx-auto">
    <h1 class="text-5xl font-extrabold text-center mb-16">
      <span class="text-cyber">My</span> <span class="text-neon">Journey</span> 🧭
    </h1>

    <!-- FORMAL EDUCATION -->
    <section class="mb-16">
      <h2 class="section-title text-cyber mb-6">Formal Education</h2>
      <ul class="border-l-4 border-cyber/50 pl-6 space-y-3">
        <li><span class="text-neon">2023 - Present</span> Take a Master Track of Information Technology in Binus University</li>
        <li><span class="text-neon">2020 - 2023</span> Graduated from SMAK 2 Penabur (Natural Science Class)</li>
        <li><span class="text-neon">2017 - 2020</span> Graduated from SMP Bilingual Program SBM</li>
        <li><span class="text-neon">2011 - 2017</span> Graduated from SD SBM National Plus</li>
        <li><span class="text-neon">2008 - 2011</span> Graduated from KB and Kindergarten in DAMAI</li>
      </ul>
    </section>

    <!-- INFORMAL EDUCATION -->
    <section class="mb-16">
      <h2 class="section-title text-neon mb-8">Informal Education</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <a href="{{ route('journey.academics') }}" class="journey-card block">Academics</a>
        <a href="{{ route('journey.seminars') }}" class="journey-card block">Seminars</a>
        <a href="{{ route('journey.trainings') }}" class="journey-card block">Trainings</a>
        <a class="journey-card block">Communication Services</a>
      </div>
    </section>

    <!-- ADDITIONAL LEARNING -->
    <section class="mb-16">
      <h2 class="section-title text-cyber mb-8">Additional Learning</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="journey-card">Lecturing Session</div>
        <div class="journey-card">Cross Interest</div>
        <div class="journey-card">Extracurricular</div>
      </div>
    </section>

    <!-- ORGANIZATIONAL EXPERIENCE -->
    <section>
      <h2 class="section-title text-neon mb-8">Organizational Experience & Achievements</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="journey-card">Organizational Experience</div>
        <div class="journey-card">Achievements</div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="text-center py-6 border-t border-cyber/20 text-slate-500">
    © 2025 Alice Chandra — Journey Through Code 💜
  </footer>
</body>
</html>