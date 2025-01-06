<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.webp') }}" />

    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

  <!-- Navbar -->
  <nav class="bg-white bg-opacity-50 backdrop-filter backdrop-blur-lg shadow-md fixed top-0 w-full z-40">
      <div class="container mx-auto flex justify-between items-center py-4 px-8">
          <!-- Logo -->
          <a href="{{ url('/') }}" class="flex items-center space-x-2">
              <img src="Images/Micro Store  logo.png" alt="Micro Store Logo" class="h-10 w-auto">
              <span class="text-2xl font-bold text-[#d97706] font-serif hover:text-pink-500" style="font-family: Playfair Display, serif;">Micro Store</span>
          </a>
      </div>
  </nav>

   
        @yield('content') <!-- Placeholder for page-specific content -->
    

    <footer class="bg-gray-800 text-white py-8">
      <div class="container mx-auto px-8 text-center"><!--
          <p class="text-lg font-bold mb-4">Connect With Us</p>
          <!-- Social Media Icons 
          <div class="flex justify-center space-x-4 mb-4">
              <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-white">
                  <i class="fab fa-facebook fa-2x"></i>
              </a>
              <a href="https://instagram.com" target="_blank" class="text-gray-400 hover:text-white">
                  <i class="fab fa-instagram fa-2x"></i>
              </a>
              <a href="https://wa.me/9612963394" target="_blank" class="text-gray-400 hover:text-white">
                  <i class="fab fa-whatsapp fa-2x"></i>
              </a>
              <a href="mailto:ashimpaul308@gmail.com" target="_blank" class="text-gray-400 hover:text-white">
                  <i class="fas fa-envelope fa-2x"></i>
              </a>
          </div>
          <!-- Contact Details 
          <p class="text-gray-400 text-sm mb-2">Phone: +1 234-567-890</p>
          <p class="text-gray-400 text-sm mb-2">Email: info@gmail.com</p>
          <!-- Map 
          <div class="text-center">
              <div class="text-blue-600 cursor-pointer flex items-center justify-center space-x-2" onclick="showMap()">
                  <i class="fas fa-search"></i>
                  <span class="text-lg font-medium">Micro Store near me</span>
              </div>
              <div class="flex justify-center items-center h-full mt-4">
                  <iframe
                      id="map"
                      class="w-full max-w-4xl h-96 rounded-lg shadow-md hidden"
                      src="YOUR_GOOGLE_MAPS_EMBED_URL"
                      allowfullscreen
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
              </div>
          </div>-->
          <hr class="my-4 border-gray-600">
          <p class="text-gray-400 text-sm">&copy; The Micro Store Ltd 2023</p>
          <a href="../microstore/Terms and Conditions.html" class="text-blue-500 hover:underline">Terms of Website</a>
      </div>
  </footer>
  <script>
    // Open Modal
    const applyBtn = document.getElementById("applyBtn");
    const applyModal = document.getElementById("applyModal");
    const closeModal = document.getElementById("closeModal");
  
    applyBtn.addEventListener("click", function () {
      applyModal.classList.remove("hidden");
    });
  
    // Close Modal
    closeModal.addEventListener("click", function () {
      applyModal.classList.add("hidden");
    });
  
    // Close Modal on Outside Click
    window.addEventListener("click", function (e) {
      if (e.target === applyModal) {
        applyModal.classList.add("hidden");
      }
    });
  </script>
  <script src="{{ asset('public/js/script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
