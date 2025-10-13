<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts - Futuristic Portfolio</title>

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

  <!-- External CSS -->
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

  <!-- Contact Section -->
  <section class="pt-40 pb-24 px-10 text-center relative">
    <h1 class="text-5xl font-extrabold mb-6">
      <span class="text-cyber">Let's</span> <span class="text-neon">Connect 🤝</span>
    </h1>
    <p class="text-slate-400 max-w-2xl mx-auto text-lg mb-16">
      Got an idea, collaboration, or just want to say hi? Reach out and let’s build something futuristic together.
    </p>

    <!-- Contact Form -->
    <div class="max-w-3xl mx-auto bg-black/30 border border-cyber/30 rounded-2xl p-8 backdrop-blur-md shadow-[0_0_30px_#8b5cf622] contact-card">
      <form action="#" method="POST" class="space-y-6">
        @csrf
        <div class="flex flex-col text-left">
          <label for="name" class="text-slate-300 mb-2 font-semibold">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" 
                 class="p-3 bg-[#0a0018] border border-slate-700 rounded-lg text-white focus:outline-none focus:border-neon transition">
        </div>

        <div class="flex flex-col text-left">
          <label for="email" class="text-slate-300 mb-2 font-semibold">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" 
                 class="p-3 bg-[#0a0018] border border-slate-700 rounded-lg text-white focus:outline-none focus:border-neon transition">
        </div>

        <div class="flex flex-col text-left">
          <label for="message" class="text-slate-300 mb-2 font-semibold">Message</label>
          <textarea id="message" name="message" rows="5" placeholder="Type your message..."
                    class="p-3 bg-[#0a0018] border border-slate-700 rounded-lg text-white focus:outline-none focus:border-neon transition"></textarea>
        </div>

        <button type="submit"
                class="w-full py-3 bg-gradient-to-r from-cyber to-neon text-black font-semibold rounded-lg hover:scale-105 hover:shadow-[0_0_25px_#00ffff55] transition">
          Send Message 🚀
        </button>
      </form>
    </div>

    <!-- Social Links -->
    <div class="mt-16 flex justify-center gap-8 text-3xl">
      <a href="https://github.com" target="_blank" class="hover:text-neon transition"><i class="fab fa-github"></i></a>
      <a href="https://linkedin.com" target="_blank" class="hover:text-cyber transition"><i class="fab fa-linkedin"></i></a>
      <a href="mailto:alice@example.com" class="hover:text-neon transition"><i class="fas fa-envelope"></i></a>
      <a href="https://instagram.com" target="_blank" class="hover:text-cyber transition"><i class="fab fa-instagram"></i></a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 border-t border-cyber/20 text-slate-500">
    © 2025 Alice Chandra — Crafted with 💜 & Cyber Vision
  </footer>

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/a2e0e6ad3f.js" crossorigin="anonymous"></script>
</body>
</html>
