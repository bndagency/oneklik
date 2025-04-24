<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>OneKlik</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    {{-- Navbar --}}
    <nav class="bg-white shadow">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
    <div class="text-2xl font-bold text-blue-600">
      <a href="/"><img class="w-16 h-8" src="img/logook.png" alt="logo oneklik"></a>
    </div>
    <div class="hidden md:flex space-x-8">
      <a href="/" class="block py-2 text-gray-700 hover:text-blue-600 transition">Home</a>
    <a href="/services" class="block py-2 text-gray-700 hover:text-blue-600 transition">Services</a>
    <a href="/portfolio" class="block py-2 text-gray-700 hover:text-blue-600 transition">Portfolio</a>
    <a href="/blog" class="block py-2 text-gray-700 hover:text-blue-600 transition">Blog</a>
    <a href="/about" class="block py-2 text-gray-700 hover:text-blue-600 transition">About</a>
    <a href="/contact" class="block py-2 text-gray-700 hover:text-blue-600 transition">Contact</a>
    </div>
    <div class="md:hidden">
      <button id="nav-toggle" class="focus:outline-none">
        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
    </div>
    <div id="nav-menu" class="hidden md:hidden px-6 pb-4">
        <a href="/" class="block py-2 text-gray-700 hover:text-blue-600 transition">Home</a>
        <a href="/services" class="block py-2 text-gray-700 hover:text-blue-600 transition">Services</a>
        <a href="/portfolio" class="block py-2 text-gray-700 hover:text-blue-600 transition">Portfolio</a>
        <a href="/blog" class="block py-2 text-gray-700 hover:text-blue-600 transition">Blog</a>
        <a href="/about" class="block py-2 text-gray-700 hover:text-blue-600 transition">About</a>
        <a href="/contact" class="block py-2 text-gray-700 hover:text-blue-600 transition">Contact</a>
    </div>

    <script>
    document.getElementById('nav-toggle').addEventListener('click', function() {
      var menu = document.getElementById('nav-menu');
      menu.classList.toggle('hidden');
    });
    </script>
    </nav>
  
</body>
</html>
        {{-- banner --}}
    <section class="relative bg-gradient-to-r from-blue-500 via-purple-600 to-pink-500 overflow-hidden">
      <div class="absolute inset-0">
        <svg class="w-full h-full animate-pulse opacity-20" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1440 320">
          <path fill="#ffffff" fill-opacity="0.1" d="M0,64L48,80C96,96,192,128,288,138.7C384,149,480,139,576,144C672,149,768,171,864,181.3C960,192,1056,192,1152,181.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
      </div>
      <div class="relative container mx-auto px-6 py-32 text-center text-white">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6 animate-fadeInDown">
          Solusi Digital Terpercaya untuk Bisnis Anda
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate-fadeInUp">
          Oneklik.agency menyediakan layanan web development, iklan digital, dan konten kreator untuk membantu bisnis Anda tumbuh di era digital.
        </p>
      </div>
    </section>
    {{-- endbanner --}}

    {{-- services --}}
    <section id="services" class="container mx-auto px-6 py-20">
      <h2 class="text-3xl font-semibold text-center mb-12">Layanan Kami</h2>
      <div class="grid gap-12 md:grid-cols-3">

        <!-- Web Developer -->
        <div class="bg-white rounded-lg shadow p-8 text-center hover:shadow-lg transition">
          <div class="mb-6">
            <svg class="mx-auto w-16 h-16 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 18l6-6-6-6"></path>
              <path d="M8 6l-6 6 6 6"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Web Developer</h3>
          <p>
            Membuat website responsif dan modern yang sesuai kebutuhan bisnis Anda, dengan teknologi terbaru.
          </p>
        </div>

        <!-- Ads -->
        <div class="bg-white rounded-lg shadow p-8 text-center hover:shadow-lg transition">
          <div class="mb-6">
            <svg class="mx-auto w-16 h-16 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <path d="M12 8v4l3 3"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Ads</h3>
          <p>
            Menyusun strategi iklan digital yang efektif untuk meningkatkan jangkauan dan penjualan produk Anda.
          </p>
        </div>

        <!-- Content Creator -->
        <div class="bg-white rounded-lg shadow p-8 text-center hover:shadow-lg transition">
          <div class="mb-6">
            <svg class="mx-auto w-16 h-16 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 20h9"></path>
              <path d="M12 4h9"></path>
              <path d="M4 12h16"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Konten Kreator</h3>
          <p>
            Membuat konten kreatif dan menarik untuk media sosial dan platform digital Anda.
          </p>
        </div>

      </div>
    </section>
    {{-- endservices --}}

    <style>
    @keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translateY(-20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .animate-fadeInDown {
      animation: fadeInDown 1s ease forwards;
    }
    .animate-fadeInUp {
      animation: fadeInUp 1s ease forwards;
    }
    </style>
    {{-- endservices --}}
    

    <!-- Footer -->
    <footer class="bg-white border-t mt-20">
        <div class="container mx-auto px-6 py-8 text-center text-gray-600 text-sm">
            &copy; 2024 Jasa Web Developer, Ads & Konten Kreator. All rights reserved.
        </div>
    </footer>

</body>
</html>
