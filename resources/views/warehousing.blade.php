@extends('layouts.app')

@section('title', 'Warehousing channel')

@section('content')
  <main class="flex-grow bg-gray-50 pt-24">
    <section class="container mx-auto px-6 md:px-20 lg:px-40 py-16">
      <div class="bg-white shadow-lg rounded-xl p-8 hover:shadow-2xl transition duration-300 mx-auto max-w-screen-md">
        <!-- Title -->
        <h1 class="text-4xl font-bold text-gray-800 mb-4 text-center" >
          Warehousing & Storage
        </h1>
        <p class="text-gray-700 text-center mb-8">
          Join us to speed up your ligistics and reach farther, deeper and closer to your customers and clients. Micro Store takes you close to every corner in all districts.
        </p>
        <!-- Apply Button -->
        <div class="flex justify-center">
          <button id="applyBtn" class="bg-gradient-to-r from-pink-500 to-pink-700 text-white px-8 py-3 rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition duration-300 focus:outline-none">
            Apply Now
          </button>
      </div>
    </section>
  </main>

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
    <!-- State Dropdown -->
    <div class="mb-4">
      <label for="state" class="block text-gray-700 font-medium mb-2">State</label>
      <select id="state" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" required>
        <option value="">Select State</option>
        <option value="state1">State 1</option>
        <option value="state2">State 2</option>
        <option value="state3">State 3</option>
      </select>
    </div>

    <!-- District Dropdown -->
    <div class="mb-4">
      <label for="district" class="block text-gray-700 font-medium mb-2">District</label>
      <select id="district" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" required>
        <option value="">Select District</option>
        <option value="district1">District 1</option>
        <option value="district2">District 2</option>
        <option value="district3">District 3</option>
      </select>
    </div>

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

    <!-- Message -->
    <div class="mb-4">
      <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
      <textarea id="message" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" placeholder="Your Message" rows="4" required></textarea>
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
  
  