<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Journey - Futuristic Portfolio</title>

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

  <!-- Journey Section -->
  <section class="pt-40 pb-24 px-10 max-w-5xl mx-auto">
    <h1 class="text-5xl font-extrabold text-center mb-12">
      <span class="text-cyber">My</span> <span class="text-neon">Journey</span> 🧭
    </h1>

    <!-- Timeline -->
    <div class="timeline">

      <!-- Formal Education -->
      <div class="timeline-item">
        <h2 class="section-title text-cyber">Formal Education</h2>
        <ul>
          <li><span>2010–2016</span> Elementary School – SBM</li>
          <li><span>2016–2019</span> Junior High School – BPK Penabur</li>
          <li><span>2019–2022</span> Senior High School – BPK Penabur</li>
          <li><span>2022–Present</span> Binus University – Master Track of Information Technology</li>
        </ul>
      </div>

      <!-- Informal Education -->
      <div class="timeline-item">
        <h2 class="section-title text-neon">Informal Education</h2>
        <ul>
          <li><span>2023</span> BNCC Techno Talk – AI for Web Developers</li>
          <li><span>2024</span> Microsoft Edge x Education Webinar</li>
          <li><span>2024</span> Leadership Development (LDK-A UKM Futsal)</li>
          <li><span>2023</span> Community Service – Teaching Kids Coding</li>
        </ul>
      </div>

      <!-- Learning Experiences -->
      <div class="timeline-item">
        <h2 class="section-title text-cyber">Learning Experiences</h2>
        <ul>
          <li>Developed AI Chatbot Project using Laravel & OpenAI API</li>
          <li>Created AR-based Web Prototype using Three.js</li>
          <li>Explored Machine Learning Models using Python</li>
        </ul>
      </div>

      <!-- Organizational Experience -->
      <div class="timeline-item">
        <h2 class="section-title text-neon">Organizational Experience & Achievements</h2>
        <ul>
          <li><span>2023</span> BNCC Member – Software Development Division</li>
          <li><span>2024</span> BINUS Soccer Club – Vice Captain</li>
          <li><span>2024</span> National Algorithm Design Contest – Top 10</li>
        </ul>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 border-t border-cyber/20 text-slate-500">
    © 2025 Alice Chandra — Journey Through Code 💜
  </footer>

</body>
</html>