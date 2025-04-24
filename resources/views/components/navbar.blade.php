<nav class="bg-white shadow">
  <div class="container mx-auto px-6 py-4 flex items-center justify-between">
    <div class="text-2xl font-bold text-blue-600">
      <a href="#">BrandLogo</a>
    </div>
    <div class="hidden md:flex space-x-8">
      <a href="#" class="text-gray-700 hover:text-blue-600 transition">Home</a>
      <a href="#" class="text-gray-700 hover:text-blue-600 transition">Services</a>
      <a href="#" class="text-gray-700 hover:text-blue-600 transition">Portfolio</a>
      <a href="#" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
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
    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600 transition">Home</a>
    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600 transition">Services</a>
    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600 transition">Portfolio</a>
    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600 transition">Contact</a>
  </div>

  <script>
    document.getElementById('nav-toggle').addEventListener('click', function() {
      var menu = document.getElementById('nav-menu');
      menu.classList.toggle('hidden');
    });
  </script>
</nav>
