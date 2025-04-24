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
    {{-- endNavbar --}}

    <!-- Header / Hero Section -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Jasa Profesional Web Developer, Ads & Konten Kreator
            </h1>
            <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto">
                Membantu bisnis Anda tumbuh dengan website berkualitas, iklan efektif, dan konten kreatif.
            </p>
            <a href="#services" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </header>

    <!-- Services Section -->
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

    <!-- Footer -->
    <footer class="bg-white border-t mt-20">
        <div class="container mx-auto px-6 py-8 text-center text-gray-600 text-sm">
            &copy; 2024 Jasa Web Developer, Ads & Konten Kreator. All rights reserved.
        </div>
    </footer>

</body>
</html>
