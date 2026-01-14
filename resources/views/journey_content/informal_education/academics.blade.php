@extends('layouts.app')

@section('title', 'Academics')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/journey_contents/informal_education/academics.style.css') }}">
@endpush

@section('content')
<section class="pt-32 pb-24 px-6 max-w-6xl mx-auto">

  <h1 class="text-5xl font-extrabold text-center mb-12">
    <span class="text-cyan-300">Academics</span> 🎓
  </h1>

  <div class="glass-grid">

    {{-- HEADER --}}
    <div class="grid-header">
      <div>Period</div>
      <div>Academic</div>
      <div>Discussion</div>
    </div>

    {{-- ROWS --}}
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
          <li>Human Computer Interaction</li>
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
          <li>JavaScript</li>
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
      <div>Theater Club</div>
    </div>

    <div class="grid-row">
      <div>2023</div>
      <div>Binusian Gaming</div>
      <div>Gaming Club</div>
    </div>

    <div class="grid-row">
      <div>2023</div>
      <div>DAcode</div>
      <div>Algorithm & Programming Course</div>
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
    <a href="{{ route('journey') }}"
       class="px-6 py-3 border border-purple-400 text-cyan-300 rounded-xl hover:bg-purple-500 hover:text-black transition">
      ← Back to Journey
    </a>
  </div>

</section>
@endsection