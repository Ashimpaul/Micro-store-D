@extends('layouts.app')

@section('title', 'BFSI channel')

@section('content')
  <main class="flex-grow bg-gray-50 pt-24">
    <section class="container mx-auto px-6 md:px-20 lg:px-40 py-16">
      <div class="bg-white shadow-lg rounded-xl p-8 hover:shadow-2xl transition duration-300 mx-auto max-w-screen-md">
        <!-- Title -->
        <h1 class="text-4xl font-bold text-gray-800 mb-4 text-center" >
          BFSI Collaboration
        </h1>
        <p class="text-gray-700 text-center mb-8">
          Join us to bring Micro Store closer to every corner of the district. Apply now to become a channel partner.
        </p>
        <!-- Apply Button -->
        <div class="flex justify-center">
          <button id="applyBtn" class="bg-gradient-to-r from-pink-500 to-pink-700 text-white px-8 py-3 rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition duration-300 focus:outline-none">
            Apply Now
          </button>
      </div>
    </section>
  </main>
<!-- Modal -->
<div id="applyModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-md w-full">
      <!-- Modal Header -->
      <div class="flex justify-between items-center mb-6">
        <h4 class="text-2xl font-bold text-gray-900">Application Form</h4>
        <button id="closeModal" class="text-gray-600 hover:text-gray-900 text-2xl">&times;</button>
      </div>
      <!-- Modal Body -->
      <form>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Full Name -->
    <div class="mb-4">
      <label for="fullname" class="block text-gray-700 font-medium mb-2">Full Name</label>
      <input type="text" id="fullname" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" placeholder="Your Full Name" required>
    </div>

    <!-- Designation -->
    <div class="mb-4">
      <label for="designation" class="block text-gray-700 font-medium mb-2">Designation</label>
      <input type="text" id="designation" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" placeholder="Your Designation" required>
    </div>

    <!-- Name of Organisation -->
    <div class="mb-4">
      <label for="organisation" class="block text-gray-700 font-medium mb-2">Name of Organisation</label>
      <input type="text" id="organisation" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" placeholder="Name of Organisation" required>
    </div>

    <!-- Email Address -->
    <div class="mb-4">
      <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
      <input type="email" id="email" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" placeholder="Your Email Address" required>
    </div>

    <!-- Phone Number -->
    <div class="mb-4">
      <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
      <input type="tel" id="phone" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" placeholder="Your Phone Number" required>
    </div>

    <!-- Service/Product -->
    <div class="mb-4">
      <label for="service_product" class="block text-gray-700 font-medium mb-2">Service/Product</label>
      <input type="text" id="service_product" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" placeholder="Service or Product" required>
    </div>
  </div>

  <!-- Submit Button -->
  <div class="flex justify-end mt-6">
    <button type="submit" class="bg-gradient-to-r from-pink-500 to-pink-700 text-white px-6 py-2 rounded-full shadow-md hover:shadow-lg transition duration-300">
      Submit
    </button>
  </div>
</form>

    </div>
  </div>
@endsection
  
  