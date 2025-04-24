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
      <a href="/"><img class="w-18 h-10" src="img/logook.png" alt="logo oneklik"></a>
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
        <h1 class="text-4xl font-bold text-center mb-12">Blog Topics</h1>
        <div class="grid gap-10 md:grid-cols-3">

            <section class="bg-white rounded-lg shadow-lg p-6 transform transition duration-500 hover:scale-105 animate-fadeIn">
                <h2 class="text-2xl font-semibold mb-4 text-blue-600">Maksimalkan Potensi Bisnis Anda dengan OneKlik Agency</h2>
                <p class="text-gray-700 mb-4">
                    Layanan Kami: Solusi Digital untuk Berbagai Kebutuhan
                    OneKlik.Agency menawarkan berbagai layanan yang dirancang untuk memenuhi kebutuhan digital bisnis Anda, mulai dari pengembangan website hingga strategi pemasaran digital. Salah satu layanan utama kami adalah web development, di mana kami menciptakan situs web yang responsif dan SEO-friendly.
                </p>
                <div class="text-blue-600 font-semibold">Read more &rarr;</div>
            </section>

            <section class="bg-white rounded-lg shadow-lg p-6 transform transition duration-500 hover:scale-105 animate-fadeIn">
                <h2 class="text-2xl font-semibold mb-4 text-green-600">Solusi Digital Kreatif untuk Bisnis Anda</h2>
                <p class="text-gray-700 mb-4">
                    Layanan Web Development
Oneklik.agency menawarkan berbagai layanan web development yang dirancang untuk memenuhi kebutuhan khusus dari setiap brand. Dalam dunia digital yang terus berkembang, memiliki website profesional dan responsif menjadi hal yang sangat penting untuk keberlangsungan bisnis.
                </p>
                <div class="text-green-600 font-semibold">Read more &rarr;</div>
            </section>

            <section class="bg-white rounded-lg shadow-lg p-6 transform transition duration-500 hover:scale-105 animate-fadeIn">
                <h2 class="text-2xl font-semibold mb-4 text-purple-600">Inovasi Digital untuk Memajukan Bisnis Anda</h2>
                <p class="text-gray-700 mb-4">
                    Pengembangan Website yang Menarik dan Optimal
Oneklik.agency menyediakan layanan pengembangan website yang dirancang untuk memenuhi kebutuhan bisnis Anda secara efektif dan estetis. Proses pembuatan website dimulai dengan analisis mendalam mengenai identitas dan tujuan brand, yang menjadi dasar dari setiap desain yang dihasilkan.
                </p>
                <div class="text-purple-600 font-semibold">Read more &rarr;</div>
            </section>

            <section class="bg-white rounded-lg shadow-lg p-6 transform transition duration-500 hover:scale-105 animate-fadeIn">
                <h2 class="text-2xl font-semibold mb-4 text-red-600">Partner Terbaik untuk Transformasi Digital Bisnis Anda</h2>
                <p class="text-gray-700 mb-4">
                    Pembangunan Website yang Optimal untuk Brand Anda
Oneklik.agency menawarkan layanan web development yang dirancang untuk membantu bisnis Anda mendapatkan kehadiran online yang kuat dan efektif. Proses pembuatan website dimulai dengan memahami kebutuhan unik dari brand Anda, di mana setiap proyek dimodifikasi untuk mencerminkan visi dan nilai-nilai perusahaan.
                </p>
                <div class="text-red-600 font-semibold">Read more &rarr;</div>
            </section>

            <section class="bg-white rounded-lg shadow-lg p-6 transform transition duration-500 hover:scale-105 animate-fadeIn">
                <h2 class="text-2xl font-semibold mb-4 text-purple-600">Kemitraan Digital untuk Pertumbuhan Bisnis Anda</h2>
                <p class="text-gray-700 mb-4">
                    Layanan Beragam untuk Pengembangan Web
Oneklik.agency menawarkan berbagai layanan pengembangan web yang dirancang untuk memenuhi kebutuhan bisnis dalam era digital yang terus berkembang. Memiliki website profesional dan responsif adalah suatu keharusan bagi setiap perusahaan yang ingin meningkatkan visibilitas dan menarik perhatian pelanggan potensial.
                </p>
                <div class="text-purple-600 font-semibold">Read more &rarr;</div>
            </section>

            <section class="bg-white rounded-lg shadow-lg p-6 transform transition duration-500 hover:scale-105 animate-fadeIn">
                <h2 class="text-2xl font-semibold mb-4 text-purple-600">Solusi Lengkap untuk Kebutuhan Digital Bisnis Anda</h2>
                <p class="text-gray-700 mb-4">
                    Web Development: Membangun Website Profesional dan Responsif
Oneklik.agency menawarkan layanan web development yang komprehensif untuk memenuhi kebutuhan digital bisnis Anda. Dengan pengalaman dan keahlian dalam pengembangan website, tim kami bertujuan untuk menciptakan platform yang tidak hanya menarik secara visual, tetapi juga fungsional dan responsif.
                </p>
                <div class="text-purple-600 font-semibold">Read more &rarr;</div>
            </section>

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
