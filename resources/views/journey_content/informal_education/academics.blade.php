<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academics - Futuristic Portfolio</title>

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

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/journey_contents/informal_education/academics.style.css') }}">
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-[#050016] to-[#090020] text-white font-sans">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-10 py-6 bg-black/30 backdrop-blur-md border-b border-cyber fixed top-0 w-full z-50">
    <a href="/" class="text-2xl font-bold text-neon tracking-widest">Futuristic<span class="text-cyber">AI</span></a>
    <div class="space-x-8 text-slate-300">
      <a href="/" class="hover:text-neon transition">Home</a>
      <a href="/about" class="hover:text-neon transition">About</a>
      <a href="/projects" class="hover:text-neon transition">Projects</a>
      <a href="/skills" class="hover:text-neon transition">Skills</a>
      <a href="/journey" class="hover:text-neon transition">Journey</a>
      <a href="/contacts" class="hover:text-neon transition">Contacts</a>
    </div>
  </nav>

  <!-- Content -->
  <section class="pt-40 pb-24 px-10 max-w-6xl mx-auto">
    <h1 class="text-5xl font-extrabold text-center mb-12">
      <span class="text-neon">Academics</span> 🎓
    </h1>

    <div class="glass-grid">

      <!-- HEADER -->
      <div class="grid-header">
        <div>Period</div>
        <div>Academic</div>
        <div>Discussion</div>
      </div>

      <!-- ROWS -->
      <div class="grid-row">
        <div>2024 (August)</div>
        <div>Algodemy (Term 3)</div>
        <div>
          <ul>
            <li>Computational Physics</li>
            <li>OOP Java</li>
            <li>Database</li>
            <li>Computational Network</li>
          </ul>
        </div>
      </div>

      <div class="grid-row">
        <div>2024 (March)</div>
        <div>Algodemy (Term 2)</div>
        <div>
          <ul>
            <li>Scientific Computing</li>
            <li>Data Structure</li>
            <li>Human Computer</li>
            <li>Interaction</li>
          </ul>
        </div>
      </div>

      <div class="grid-row">
        <div>2023 - Present</div>
        <div>BNCC</div>
        <div>
          <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JS</li>
            <li>Laravel</li>
          </ul>
        </div>
      </div>

      <div class="grid-row">
        <div>2023 - 2025</div>
        <div>Binus Soccer Club</div>
        <div>Soccer Club</div>
      </div>

      <div class="grid-row">
        <div>2023</div>
        <div>STMANIS</div>
        <div>Teather Club</div>
      </div>

      <div class="grid-row">
        <div>2023</div>
        <div>Binusian Gaming</div>
        <div>Gaming Club</div>
      </div>

      <div class="grid-row">
        <div>2023</div>
        <div>DAcode</div>
        <div>Algorithm and Programming Course</div>
      </div>

      <div class="grid-row">
        <div>2022 - 2023</div>
        <div>Volleyball</div>
        <div>Volleyball Extracurricular</div>
      </div>

      <div class="grid-row">
        <div>2021 - 2022</div>
        <div>Computer Science Club</div>
        <div>
          <ul>
            <li>C++</li>
            <li>Computational Thinking</li>
            <li>MIT App Inventor</li>
            <li>Logical Analysis</li>
          </ul>
        </div>
      </div>

      <div class="grid-row">
        <div>2020 - 2022</div>
        <div>Korean</div>
        <div>Korean Language Extracurricular</div>
      </div>

      <div class="grid-row">
        <div>2020 - 2021</div>
        <div>Chemistry Science Club</div>
        <div>Chemistry Science Club Extracurricular</div>
      </div>
      
    </div>

    <div class="text-center mt-16">
      <a href="/journey" class="px-6 py-3 border border-cyber text-neon rounded-xl hover:bg-cyber hover:text-black transition-all duration-300">
        ← Back to Journey
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 border-t border-cyber/20 text-slate-500">
    © 2025 Alice Chandra — Futuristic Learning ✨
  </footer>

</body>
</html>