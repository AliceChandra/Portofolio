@extends('layouts.app')

@push('styles')
@vite('resources/css/navbars/contacts.style.css')
@endpush

@section('title', 'Contact')

@section('content')

<!-- Header -->
<section class="pb-24 px-10 text-center fade-section">
  <h1 class="text-5xl font-extrabold mb-8">
    <span class="text-cyber">Connect</span>
    <span class="text-neon">With Me 💬</span>
  </h1>

  <p class="text-slate-400 max-w-2xl mx-auto text-lg">
    Let’s collaborate, chat, or build something futuristic together!
    Feel free to reach me through social media or the message form below.
  </p>
</section>

<!-- Social Media -->
<section class="py-20 px-10 text-center border-t border-cyber/20 fade-section">
  <h2 class="text-3xl font-bold mb-10 text-cyber tracking-wide">
    Find Me on Socials 🌐
  </h2>

  <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 max-w-6xl mx-auto">

    <div class="social-card">
      <img src="{{ asset('images/discord.png') }}" class="icon">
      <p class="username">alicechandra_78925</p>
    </div>

    <div class="social-card">
      <img src="{{ asset('images/instagram.png') }}" class="icon">
      <p class="username">@busantigerssoccer</p>
    </div>

    <div class="social-card">
      <img src="{{ asset('images/line.png') }}" class="icon">
      <p class="username">dragonman770</p>
    </div>

    <div class="social-card">
      <img src="{{ asset('images/youtube.png') }}" class="icon">
      <p class="username">ACBinusian27</p>
    </div>

    <div class="social-card">
      <img src="{{ asset('images/snapchat.png') }}" class="icon">
      <p class="username">busantigers</p>
    </div>

    <div class="social-card">
      <img src="{{ asset('images/facebook.png') }}" class="icon">
      <p class="username">Alice Chandra</p>
    </div>

    <div class="social-card">
      <img src="{{ asset('images/x.png') }}" class="icon">
      <p class="username">Alice Chandra</p>
    </div>

  </div>
</section>

<!-- Contact Form -->
<section class="py-20 px-10 text-center border-t border-cyber/20 fade-section">
  <h2 class="text-3xl font-bold mb-10 text-neon tracking-wide">
    Send Me a Message ✉️
  </h2>

  <form method="POST"
        class="max-w-2xl mx-auto bg-[#0b0122]/70 border border-cyber/30 p-10 rounded-2xl backdrop-blur-md transition">
    @csrf

    <div class="mb-6 text-left">
      <label class="text-slate-300 text-sm font-semibold">Name</label>
      <input type="text" required
             class="w-full bg-transparent border border-cyber/40 rounded-lg px-4 py-3 mt-2 focus:border-neon outline-none">
    </div>

    <div class="mb-6 text-left">
      <label class="text-slate-300 text-sm font-semibold">Email</label>
      <input type="email" required
             class="w-full bg-transparent border border-cyber/40 rounded-lg px-4 py-3 mt-2 focus:border-neon outline-none">
    </div>

    <div class="mb-8 text-left">
      <label class="text-slate-300 text-sm font-semibold">Message</label>
      <textarea rows="5" required
                class="w-full bg-transparent border border-cyber/40 rounded-lg px-4 py-3 mt-2 focus:border-neon outline-none"></textarea>
    </div>

    <button type="submit"
            class="w-full py-3 bg-gradient-to-r from-cyber to-neon text-black font-semibold rounded-lg hover:scale-105 transition">
      Send Message 🚀
    </button>
  </form>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
  const sections = document.querySelectorAll('.fade-section');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.1 });
  sections.forEach(section => observer.observe(section));
});
</script>
@endpush