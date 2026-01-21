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
  @vite('resources/css/journey_contents/informal_education/seminars.style.css')
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
        <div>Date</div>
        <div>Training Title</div>
        <div>Organizer</div>
      </div>

      <!-- ROWS -->
      <div class="grid-row">
        <div>20 November 2025</div>
        <div>BFest 4: The Real World 101: Your Guide to Thriving After College</div>
        <div>Binus Festival</div>
      </div>

      <div class="grid-row">
        <div>20 November 2025</div>
        <div>BFest 3: The X Factor for Success in The Workplace</div>
        <div>Binus Festival</div>
      </div>

      <div class="grid-row">
        <div>19 November 2025</div>
        <div>BFest 2: A to Z Recruitment</div>
        <div>Binus Festival</div>
      </div>

      <div class="grid-row">
        <div>19 November 2025</div>
        <div>BFest 1: Ready to Get Hired? Recruitment Insights & Interview Simulation</div>
        <div>Binus Festival</div>
      </div>

      <div class="grid-row">
        <div>6 May 2025</div>
        <div>Seminar BGA Developmental</div>
        <div>Binus Festival</div>
      </div>

      <div class="grid-row">
        <div>2 May 2025</div>
        <div>The Financial Navigator: A Guide to Mastering Your Budget</div>
        <div>SSO Binus Square</div>
      </div>

      <div class="grid-row">
        <div>30 April 2025</div>
        <div>What Your Professors Aren’t Telling You About the Future of AI “But I Will”</div>
        <div>SSO Binus Square</div>
      </div>

      <div class="grid-row">
        <div>11 March 2025</div>
        <div>A Day in the Life of a Software Engineer</div>
        <div>SoCS Binus</div>
      </div>

      <div class="grid-row">
        <div>19 December 2024</div>
        <div>BNCC Techno Talk “Fintech Revolution: Shaping the Future of Finance”</div>
        <div>BNCC</div>
      </div>

      <div class="grid-row">
        <div>22 August 2024</div>
        <div>Kelas Persiapan Karir</div>
        <div>SASC Kemanggisan</div>
      </div>

      <div class="grid-row">
        <div>2 July 2024</div>
        <div>Talenta Muda dari Kampus Terbaik untuk Mewujudkan Masyarakat Sehat Menuju Indonesia Emas 2045</div>
        <div>SSO</div>
      </div>

      <div class="grid-row">
        <div>14 May 2024</div>
        <div>Empowering Tomorrow’s Leaders: Unlocking Hungary’s Scholarship Opportunities for Global Education</div>
        <div>BINUS International Office</div>
      </div>

      <div class="grid-row">
        <div>14 May 2024</div>
        <div>International Seminar: Microsoft Edge × Education</div>
        <div>SoCS Binus</div>
      </div>
      
      <div class="grid-row">
        <div>13 March 2024</div>
        <div>Digital Content Creation Soft-Skill Series: Collaboration</div>
        <div>Internship Center</div>
      </div>

      <div class="grid-row">
        <div>5 February 2024</div>
        <div>Kegiatan Mentoring SASC Periode Genap 2023/2024</div>
        <div>SASC Kemanggisan</div>
      </div>

      <div class="grid-row">
        <div>1 January 2024</div>
        <div>Course Completion on CX</div>
        <div>Knowledge System and Learning Product</div>
      </div>

      <div class="grid-row">
        <div>22 November 2023</div>
        <div>International Seminar: Parameter-Efficient Fine-Tuning of LLaMA for the Clinical Domain</div>
        <div>SoCS Binus</div>
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