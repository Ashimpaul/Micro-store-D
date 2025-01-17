<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micro Store</title>

    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="public\assets\favicon.webp" />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  
    </head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">

  <!-- Navbar -->
<nav class="bg-white bg-opacity-50 backdrop-filter backdrop-blur-lg shadow-md fixed top-0 w-full z-40">
  <div class="container mx-auto flex justify-between items-center py-4 px-8">
      <!-- Logo -->
      <a href="#" class="flex items-center space-x-2">
          <img src="Images/Micro Store  logo.png" alt="Humsafar Weddings Logo" class="h-10 w-auto ">
          <span class="text-2xl font-bold text-[#d97706] font-serif hover:text-pink-500" style="font-family: Playfair Display, serif;">Micro Store</span>
      </a>

      <!-- Hamburger Menu Button (Visible on Small Screens) -->
      <button id="menu-toggle" class="block md:hidden bg-white text-[#d97706] w-10 h-10 rounded-full shadow-md flex items-center justify-center" aria-label="Open Menu">
          <i class="fas fa-bars text-xl"></i>
      </button>

      <!-- Desktop Navigation Links -->
      <div class="hidden md:flex space-x-6">
        <a href="#home" class="text-gray-700 hover:text-pink-500">Home</a>
        <a href="#services" class="text-gray-700 hover:text-pink-500">Services</a>
          <a href="#business" class="text-gray-700 hover:text-pink-500">Business</a>
          <a href="{{ url('/about') }}" class="text-gray-700 hover:text-pink-500">About</a>
          <a href="#contact" class="text-gray-700 hover:text-pink-500">Contact</a>
      </div>
  </div>
</nav>

<!-- Sidebar Navigation -->
<nav id="sidebar-wrapper" class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
  <div class="flex flex-col h-full justify-between">
    <!-- Close Button -->
    
      <!-- Sidebar Logo and Links -->
      <ul class="flex flex-col items-center space-y-6 py-8">
        <button id="menu-close" class="bg-white text-[#d97706] w-10 h-10 rounded-full shadow-md flex items-center justify-center mx-8 mb-8 hover:bg-pink-500" aria-label="Close Menu">
          <i class="fas fa-arrow-right text-xl"></i>
      </button>
      <li><a href="#home" class="text-gray-700 hover:text-pink-500">Home</a></li>
      
          <li><a href="#services" class="text-gray-700 hover:text-pink-500">Services</a></li>
          <li><a href="#business" class="text-gray-700 hover:text-pink-500">Business</a></li>
          <li><a href="{{ url('/about') }}" class="text-gray-700 hover:text-pink-500">About</a></li>
          <li><a href="#contact" class="text-gray-700 hover:text-pink-500">Contact</a></li>
      </ul>

      
  </div>
</nav>

  


    <!-- Hero Section -->
    <section class="relative h-screen bg-black" id="home">
      <div id="hero-slider" class="absolute inset-0 w-full h-full overflow-hidden">
          <!-- Slide 1 -->
          <div class="absolute inset-0 h-full w-full bg-cover bg-center transition-opacity duration-1000 opacity-100" style="background-image: url('Images/tec.jpg');"></div>
          <!-- Slide 2 -->
         
      </div>
      <div class="absolute inset-0 hero-overlay"></div>
      <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
          <h1 class="text-6xl font-bold mb-4">The Micro Store</h1>
          <p class="text-xl mb-8  text-gray-200">Welcome to the friendly neighborhood branch of your bank! </p>
          <a href="#services" class="bg-gradient-to-r from-pink-500 to-pink-700 text-white px-8 py-3 rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition duration-300 focus:outline-none">Discover Our Services</a>
      </div>
  </section>
  


  
  <!-- Services Section -->
<!-- Services-->
<section class="content-section bg-primary text-white text-center py-16" id="services">
  <div class="container mx-auto px-4">
    <div class="content-section-heading mb-10">
      <h3 class="text-secondary mb-2 text-lg md:text-xl font-medium">Services</h3>
      <h2 class="text-3xl md:text-4xl font-bold">What We Offer</h2>
    </div>
    <div class="service-items grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3  gap-8 justify-center items-center">

      <!-- Service: mATM -->
      <div class="service-item text-center">
        <a href="{{url('/m-atm')}}">
          <span class="service-icon flex items-center justify-center rounded-full bg-white text-primary p-8 mx-auto mb-3" style="width: 120px; height: 120px;">
            <i class="fa-regular fa-money-bill-1 text-4xl"></i>
          </span>
          <h4 class="text-base font-bold"><strong>mATM</strong></h4>
          <p class="text-faded mb-0 text-sm">Banking, Cash, Insurance, Loans, Securities, Payments, Bills, Recharges, Remittances…</p>
        </a>
      </div>

      <!-- Service: Warehouse -->
      <div class="service-item text-center">
        <a href="{{url('/warehouse')}}">
          <span class="service-icon flex items-center justify-center rounded-full bg-white text-primary p-8 mx-auto mb-3" style="width: 120px; height: 120px;">
            <i class="fa-solid fa-truck-fast text-4xl"></i>
          </span>
          <h4 class="text-base font-bold"><strong>Warehouse</strong></h4>
          <p class="text-faded mb-0 text-sm">Pick up and drop points, last mile delivery, micro warehousing</p>
        </a>
      </div>

      <!-- Service: Citizen Services -->
      <div class="service-item text-center">
        <a href="{{url('/citizen-services')}}">
          <span class="service-icon flex items-center justify-center rounded-full bg-white text-primary p-8 mx-auto mb-3" style="width: 120px; height: 120px;">
            <i class="fa-solid fa-bell-concierge text-4xl"></i>
          </span>
          <h4 class="text-base font-bold"><strong>Citizen Services</strong></h4>
          <p class="text-faded mb-0 text-sm">Registrations, applications, updates, some inquiries….</p>
        </a>
      </div>

    </div>
  </div>
</section>



<section class="py-20 bg-gray-50 text-gray-700" id="services">
  <div class="container mx-auto px-4">
    <div class="text-center">
      <h3 class="text-lg text-gray-500 mb-2">mATM</h3>
      <h2 class="text-3xl font-bold text-gray-700 mb-8">Financial Services</h2>
    </div>
    <div class="flex flex-wrap justify-center -mx-4">
      <!-- Banking -->
      <div class="w-full md:w-1/2 xl:w-1/2 p-4">
        <a class="block" href="{{url('/banking')}}">
          <div class="bg-white rounded-lg shadow-md p-4">
            <img class="w-full h-64 object-cover rounded-lg" src="Images/cash3.jpg" alt="Banking">
            <div class="p-4">
              <h3 class="text-lg font-bold text-gray-700 mb-2">Banking</h3>
              <p class="text-gray-500 mb-4">Savings, current accounts,  Fixed & Recurring deposits and more.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Cash -->
      <div class="w-full md:w-1/2 xl:w-1/2 p-4">
        <a class="block" href="{{url('/cash')}}">
          <div class="bg-white rounded-lg shadow-md p-4">
            <img class="w-full h-64 object-cover rounded-lg" src="Images/cash.jpg" alt="Cash Services">
            <div class="p-4">
              <h3 class="text-lg font-bold text-gray-700 mb-2">Cash</h3>
              <p class="text-gray-500 mb-4">Withdrawal, deposit, payments,remittances and transfers, .</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Payments -->
      <div class="w-full md:w-1/2 xl:w-1/2 p-4">
        <a class="block" href="{{('/payments')}}">
          <div class="bg-white rounded-lg shadow-md p-4">
            <img class="w-full h-64 object-cover rounded-lg" src="Images/cash4.jpg" alt="Payments">
            <div class="p-4">
              <h3 class="text-lg font-bold text-gray-700 mb-2">Payments</h3>
              <p class="text-gray-500 mb-4">Bills, account transfers, utilities, taxes, and more.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Investments -->
      <div class="w-full md:w-1/2 xl:w-1/2 p-4">
        <a class="block" href="{{('/investments')}}">
          <div class="bg-white rounded-lg shadow-md p-4">
            <img class="w-full h-64 object-cover rounded-lg" src="Images/cash2.png" alt="Investments">
            <div class="p-4">
              <h3 class="text-lg font-bold text-gray-700 mb-2">Investments</h3>
              <p class="text-gray-500 mb-4">Stocks, bonds, mutual funds, and portfolio management.</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

  
  

  
<section id="business" class="py-20 bg-primary text-gray-700">
  <div class="container mx-auto px-8">
    <h2 class="text-4xl font-bold text-center" style="color: #d99de8; margin-bottom: 2rem;">
      Business
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 text-center">

      <!-- District Channel Partnership Card -->
      <div class="business-item bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl hover:bg-pink-50">
        <a href="{{ url('/district') }}">
          <div class="p-6">
            <i class="fas fa-handshake text-3xl mb-4" style="color: #d99de8;"></i>
            <h4 class="text-xl font-semibold text-gray-800 mb-4">District Channel Partners</h4>
            <p class="text-gray-600 text-base">Distributors, wholesalers, startups, newbies...</p>
          </div>
        </a>
      </div>

      <!-- Merchants Channel Partners Card -->
      <div class="business-item bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl hover:bg-pink-50">
        <a href="{{ url('/merchant') }}">
          <div class="p-6">
            <i class="fas fa-users text-3xl mb-4" style="color: #d99de8;"></i>
            <h4 class="text-xl font-semibold text-gray-800 mb-4">Merchants Channel Partners</h4>
            <p class="text-gray-600 text-base">Retailers, vendors, small stores, insurance agents...</p>
          </div>
        </a>
      </div>

      <!-- BFSI Collaboration Card -->
      <div class="business-item bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl hover:bg-pink-50">
        <a href="{{url('/bfsi')}}">
          <div class="p-6">
            <i class="fas fa-piggy-bank text-3xl mb-4" style="color: #d99de8;"></i>
            <h4 class="text-xl font-semibold text-gray-800 mb-4">BFSI Collaboration</h4>
            <p class="text-gray-600 text-base">Banks, NBFC, insurers, mutual funds</p>
          </div>
        </a>
      </div>

      <!-- Warehousing & Storage Card -->
      <div class="business-item bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl hover:bg-pink-50">
        <a href="{{url('/warehousing')}}">
          <div class="p-6">
            <i class="fas fa-warehouse text-3xl mb-4" style="color: #d99de8;"></i>
            <h4 class="text-xl font-semibold text-gray-800 mb-4">Warehousing & Storage</h4>
            <p class="text-gray-600 text-base">Ecommerce, qcommerce, parcel companies, local businesses</p>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>


  <!-- About 
  <section id="about" class="content-section bg-light text-dark py-16">
    <div class="container mx-auto px-4 lg:px-5">
      <div class="row justify-center">
        <div class="col-lg-8 text-center">
          <!-- Top Heading 
          <h2 class="text-4xl font-bold text-center text-pink-600 mb-8">About Us</h2>
          
          <!-- Content 
          <p class="text-base leading-loose text-gray-700 font-medium mb-8">
            <span class="font-semibold text-pink-500">The Micro Store</span>, a modern retailing platform that connects, empowers, and delivers. 
            Bringing e-commerce to the vicinity, banking to the neighborhood, warehousing around 
            the kerb, and digitizing small and large retailers! A blend of the physical and digital 
            with dollops of convenience and ease; building the power to empower. 
            <br><br>
            An inclusive environment reaching your neighborhood, around your corner, and your doorstep 
            with your money, your goods, your tools. We help connect your business to the world - 
            digitally and physically. Micro Store addresses the needs of all people in rural, semi-urban, 
            and urban areas as well as businesses of all scales and sizes, from home businesses in villages 
            to MSMEs and everyone else everywhere using tools and processes relied upon and supported by 
            bankers and some of the most reliable enterprises.
          </p>
          
          <!-- Button 
          <a href="about.html" class="px-8 py-3 bg-pink-600 hover:bg-pink-700 text-white rounded-full font-bold transition transform hover:scale-105 shadow-lg">
            Learn More About Us
          </a>
        </div>
      </div>
    </div>
  </section>
-->
  
  
  

  

  <!-- Contact Section -->
  <section id="contact" class="py-20 bg-white text-gray-700">
    <div class="container mx-auto px-8">
        <h2 class="text-4xl font-bold text-center text-pink-600 mb-8">Contact Us</h2>

        <form id="contactForm" method="post" class="max-w-xl mx-auto">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-600">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-600">
            </div>
            <div class="mb-4">
                <label for="contact" class="block text-sm font-bold mb-2">Contact</label>
                <input type="text" id="contact" name="contact" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-600">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-bold mb-2">Message</label>
                <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-600"></textarea>
            </div>
            <button type="submit" id="submitButton" class="w-full bg-gradient-to-r from-pink-500 to-pink-700 text-white px-8 py-3 rounded-lg shadow-lg hover:shadow-xl hover:scale-105 transition duration-300 focus:outline-none justify-center">Send Message</button>
        </form>
    </div>
</section>

<!-- SweetAlert2 and jQuery CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#contactForm').on('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            // Disable the submit button to prevent multiple submissions
            $('#submitButton').prop('disabled', true);

            // Get form data
            var formData = $(this).serialize();

            // AJAX request
            $.ajax({
                url: "{{ route('contact.store') }}", // Update with your route
                type: "POST",
                data: formData,
                success: function (response) {
                    // Display success SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Form submitted successfully',
                        text: response.message,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#28a745', // Green for success
                    });

                    // Reset the form
                    $('#contactForm')[0].reset();
                },
                error: function (xhr) {
                    // Extract error messages
                    var errorMessage = "Something went wrong!";
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        errorMessage = Object.values(xhr.responseJSON.errors).map(function (msg) {
                            return msg.join(', ');
                        }).join('\n');
                    }

                    // Display error SweetAlert
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: errorMessage,
                        confirmButtonText: 'Try Again',
                        confirmButtonColor: '#dc3545', // Red for errors
                    });
                },
                complete: function () {
                    // Re-enable the submit button
                    $('#submitButton').prop('disabled', false);
                }
            });
        });
    });
</script>









<div id="cookiePopup" class="cookie-popup">
  <div class="cookie-content">
    
    <p>We use cookies, to give you a better experience. By using our website you agree to our <a href="{{url('/privacy-policy')}}">Policies</a>.</p>
    <div class="cookie-actions">
      <button id="acceptCookies" class="btn btn-primary">Accept</button>
      <button id="rejectCookies" class="btn btn-secondary">Reject</button>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="bg-gray-800 text-white py-8">
  <div class="container mx-auto px-8 sm:px-16 lg:px-32">
    <!-- Footer Top Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
      <!-- Useful Links Section -->
      <div>
        <h5 class="font-bold mb-2">Useful Links</h5>
        <ul>
          <li><a href="/" class="text-white hover:text-gray-300">Home</a></li>
          <li><a href="/#services" class="text-white hover:text-gray-300">Services</a></li>
          <li><a href="/#business" class="text-white hover:text-gray-300">Business</a></li>
          <li><a href="{{ url('/about') }}" class="text-white hover:text-gray-300">About Us</a></li>

          <li><a href="/#contact" class="text-white hover:text-gray-300">Contact</a></li>
        </ul>
      </div>

      <!-- Our Services Section -->
      <div>
        <h5 class="font-bold mb-2">Our Services</h5>
        <ul>
          <li><a href="/web-design" class="text-white hover:text-gray-300">M-ATM</a></li>
          <li><a href="/web-development" class="text-white hover:text-gray-300">Warehouse</a></li>
          <li><a href="/product-management" class="text-white hover:text-gray-300">Citizen Services</a></li>
        </ul>
      </div>

      <!-- Contact Us Section -->
      <div>
        <h5 class="font-bold mb-2">Contact Us</h5>
        <p class="text-sm">Email: info@microstore.com</p>
      </div>

      <!-- Policies Section -->
      <div>
        <h5 class="font-bold mb-2">Policies</h5>
        <ul>
          <li><a href="/policy.htm" class="text-white hover:text-gray-300">Privacy Policy</a></li>
          <li><a href="/terms.htm" class="text-white hover:text-gray-300">Terms of Website</a></li>
          <li><a href="/disclaimer.htm" class="text-white hover:text-gray-300">Legal Disclaimer</a></li>
        </ul>
      </div>
    </div>

    <!-- Google Maps Embed Section -->
    <div class="text-center mb-8">
      <div class="text-blue-600 cursor-pointer flex items-center justify-center space-x-2" onclick="showMap()">
        <i class="fas fa-search"></i>
        <span class="text-lg font-medium">Micro Store near me</span>
      </div>
      <div class="flex justify-center items-center h-full">
        <iframe
          id="map"
          class="w-full max-w-4xl h-96 mt-4 hidden rounded-lg shadow-md"
          src="YOUR_GOOGLE_MAPS_EMBED_URL"
          allowfullscreen
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>

    <!-- Footer Bottom Section -->
    <hr class="my-4 border-gray-400">
    <div class="text-center">
      <p class="text-sm text-gray-300 mb-0">&copy; The Micro Store Ltd 2023. All rights reserved.</p>
    </div>
  </div>
</footer>


<script src="{{asset('script.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>
