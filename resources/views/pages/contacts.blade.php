<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Futuristic Portfolio</title>

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

  <link rel="stylesheet" href="{{ asset('css/contacts.style.css') }}">
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
      <a href="/journey" class="hover:text-neon transition">Journey</a>
      <a href="/contacts" class="text-cyber font-semibold">Contacts</a>
    </div>
  </nav>

  <!-- Header -->
  <section class="pt-40 pb-24 px-10 text-center fade-section">
    <h1 class="text-5xl font-extrabold mb-8">
      <span class="text-cyber">Connect</span> <span class="text-neon">With Me 💬</span>
    </h1>
    <p class="text-slate-400 max-w-2xl mx-auto text-lg">
      Let’s collaborate, chat, or build something futuristic together!  
      Feel free to reach me through social media or the message form below.
    </p>
  </section>

  <!-- Social Media Section -->
  <section class="py-20 px-10 text-center border-t border-cyber/20 fade-section">
    <h2 class="text-3xl font-bold mb-10 text-cyber tracking-wide">Find Me on Socials 🌐</h2>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 justify-center max-w-6xl mx-auto">

      <div class="social-card"><img src="{{ asset('images/discord.png') }}" class="icon"><p class="username">alicechandra_78925</p></div>
      <div class="social-card"><img src="{{ asset('images/instagram.png') }}" class="icon"><p class="username">@busantigerssoccer</p></div>
      <div class="social-card"><img src="{{ asset('images/line.png') }}" class="icon"><p class="username">dragonman770</p></div>
      <div class="social-card"><img src="{{ asset('images/youtube.png') }}" class="icon"><p class="username">ACBinusian27</p></div>
      <div class="social-card"><img src="{{ asset('images/snapchat.png') }}" class="icon"><p class="username">busantigers</p></div>
      <div class="social-card"><img src="{{ asset('images/facebook.png') }}" class="icon"><p class="username">Alice Chandra</p></div>
      <div class="social-card"><img src="{{ asset('images/x.png') }}" class="icon"><p class="username">Alice Chandra</p></div>

    </div>
  </section>

  <!-- Message Form Section -->
  <section class="py-20 px-10 text-center border-t border-cyber/20 fade-section">
    <h2 class="text-3xl font-bold mb-10 text-neon tracking-wide">Send Me a Message ✉️</h2>

    <form action="#" method="POST"
          class="max-w-2xl mx-auto bg-[#0b0122]/70 border border-cyber/30 p-10 rounded-2xl shadow-[0_0_25px_#8b5cf633] backdrop-blur-md hover:shadow-[0_0_35px_#00ffff55] transition">
      @csrf
      <div class="mb-6 text-left">
        <label for="name" class="text-slate-300 text-sm font-semibold">Name</label>
        <input type="text" id="name" name="name" required
               class="w-full bg-transparent border border-cyber/40 rounded-lg px-4 py-3 mt-2 text-slate-100 focus:outline-none focus:border-neon transition">
      </div>

      <div class="mb-6 text-left">
        <label for="email" class="text-slate-300 text-sm font-semibold">Email</label>
        <input type="email" id="email" name="email" required
               class="w-full bg-transparent border border-cyber/40 rounded-lg px-4 py-3 mt-2 text-slate-100 focus:outline-none focus:border-neon transition">
      </div>

      <div class="mb-8 text-left">
        <label for="message" class="text-slate-300 text-sm font-semibold">Message</label>
        <textarea id="message" name="message" rows="5" required
                  class="w-full bg-transparent border border-cyber/40 rounded-lg px-4 py-3 mt-2 text-slate-100 focus:outline-none focus:border-neon transition"></textarea>
      </div>

      <button type="submit"
              class="w-full py-3 bg-gradient-to-r from-cyber to-neon text-black font-semibold rounded-lg hover:scale-105 hover:shadow-[0_0_20px_#00ffff66] transition">
        Send Message 🚀
      </button>
    </form>
  </section>

  <!-- Footer -->
  <footer class="text-center py-8 border-t border-cyber/20 text-slate-500 fade-section">
    © 2025 Alice Chandra — Crafted with 💜 & Cyber Vision
  </footer>

  <script>
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('visible');
      });
    }, { threshold: 0.2 });

    document.querySelectorAll('.fade-section').forEach(section => observer.observe(section));
  </script>

</body>
</html>