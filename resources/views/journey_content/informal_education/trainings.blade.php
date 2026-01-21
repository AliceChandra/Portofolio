<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trainings - Futuristic Portfolio</title>

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
  @vite('resources/css/journey_contents/informal_education/trainings.style.css')
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
      <span class="text-neon">Trainings</span> 🏋️‍♂️
    </h1>

    <div class="glass-grid">

      <!-- HEADER -->
      <div class="grid-header">
        <div>Date</div>
        <div>Training Title</div>
        <div>Organizer</div>
      </div>

      <!-- ROWS -->
      <div class="grid-row">
        <div>14 - 15 March 2025</div>
        <div>LDK-A PO BINUS 2025/2026</div>
        <div>PO Binus</div>
      </div>

      <div class="grid-row">
        <div>7 October 2024</div>
        <div>Pre-Training New Assistant Recruitment 25-1</div>
        <div>SLC Kemanggisan</div>
      </div>

      <div class="grid-row">
        <div>26 - 27 June 2024</div>
        <div>LDKCP UKM Futsal Binus 2024/2025</div>
        <div>UKM Futsal Binus</div>
      </div>

      <div class="grid-row">
        <div>19 - 23 Mei 2024</div>
        <div>Volunteer KSL in Creative & PubDoc division</div>
        <div>UKM Futsal Binus</div>
      </div>

      <div class="grid-row">
        <div>9 Maret 2024</div>
        <div>LDK-A UKM Futsal 2024/2025</div>
        <div>UKM Futsal Binus</div>
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