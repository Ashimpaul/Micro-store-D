@extends('layouts.app')

@section('title', 'Cash')

@section('content')
  <!-- Main Content Section -->
  <main class="flex-grow bg-gray-50 pt-24">
    <section class="container mx-auto flex justify-center items-center h-full px-6 md:px-20 lg:px-40 py-16">
        <!-- Section Content -->
        <div>
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Cash Services</h1>
            <p class="text-lg text-center text-gray-600 mb-12">Efficient and reliable cash management solutions tailored to your needs.</p>

            <!-- Centered Cash Services Card -->
            <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition duration-300 max-w-md mx-auto">
                <h2 class="text-2xl font-bold text-[#d97706] mb-4 text-center">Cash Services</h2>
                <!-- List of Cash Services -->
                <ul class="text-gray-600 space-y-2">
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Deposit</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Withdrawal</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Money Transfer</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Remittances</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Denomination Exchange</li>
                </ul>
            </div>
        </div>
    </section>
  </main>

@endsection