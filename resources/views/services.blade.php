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
      <a href="#">BrandLogo</a>
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

    

    <!-- Footer -->
    <footer class="bg-white border-t mt-20">
        <div class="container mx-auto px-6 py-8 text-center text-gray-600 text-sm">
            &copy; 2024 Jasa Web Developer, Ads & Konten Kreator. All rights reserved.
        </div>
    </footer>

</body>
</html>
