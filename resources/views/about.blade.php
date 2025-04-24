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

    <main class="container mx-auto px-6 py-12 space-y-16">

        <section class="text-center">
            <h1 class="text-4xl font-bold mb-4 text-blue-600">About OneKlik Agency</h1>
            <p class="text-gray-700 max-w-3xl mx-auto">
                OneKlik adalah agensi terkemuka yang mengkhususkan diri dalam pengembangan web, iklan digital, dan pembuatan konten. Kami membantu bisnis mengembangkan kehadiran online mereka dengan solusi inovatif dan strategi kreatif.
            </p>
        </section>

        <section>
            <h2 class="text-3xl font-semibold mb-6 text-green-600 text-center">Our Vision (Visi)</h2>
            <p class="text-gray-700 max-w-4xl mx-auto text-center italic">
                Menjadi agensi digital paling tepercaya dan inovatif, memberdayakan bisnis untuk berkembang di era digital melalui pengembangan web yang luar biasa, periklanan yang berdampak, dan konten kreatif.
            </p>
        </section>

        <section>
            <h2 class="text-3xl font-semibold mb-6 text-purple-600 text-center">Our Mission (Misi)</h2>
            <ul class="max-w-4xl mx-auto list-disc list-inside space-y-3 text-gray-700 text-lg">
                <li>Menyediakan situs web berkualitas tinggi, responsif, dan ramah pengguna yang disesuaikan dengan kebutuhan klien.</li>
                <li>Membuat kampanye iklan digital efektif yang memaksimalkan ROI dan kesadaran merek.</li>
                <li>Memproduksi konten menarik dan orisinal yang terhubung dengan audiens target.</li>
                <li>Terus berinovasi dan beradaptasi dengan tren dan teknologi digital terkini.</li>
                <li>Memberikan layanan pelanggan yang sangat baik dan membangun kemitraan jangka panjang.</li>
            </ul>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-20">
        <div class="container mx-auto px-6 py-8 text-center text-gray-600 text-sm">
            &copy; 2024 Jasa Web Developer, Ads & Konten Kreator. All rights reserved.
        </div>
    </footer>

</body>
</html>
