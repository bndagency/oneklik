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

    <main class="container mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-center mb-12 text-blue-600 animate-fadeIn">Contact Us</h1>
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-8 animate-pulse">
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                </div>
                <div>
                    <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-blue-700 transition transform hover:scale-105">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </main>
    

    <!-- Footer -->
    <footer class="bg-white border-t mt-20">
        <div class="container mx-auto px-6 py-8 text-center text-gray-600 text-sm">
            &copy; 2024 Jasa Web Developer, Ads & Konten Kreator. All rights reserved.
        </div>
    </footer>

</body>
</html>
