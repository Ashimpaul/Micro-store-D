@extends('layouts.app')

@section('title', 'Investments')

@section('content')
  <!-- Main Content Section -->
  <main class="flex-grow bg-gray-50 pt-24">
    <section class="container mx-auto flex justify-center items-center h-full px-6 md:px-20 lg:px-40 py-16">
        <!-- Section Content -->
        <div>
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Investment Services</h1>
            <p class="text-lg text-center text-gray-600 mb-12">Your gateway to smart investments and financial growth.</p>

            <!-- Centered Investment Card -->
            <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition duration-300 max-w-md mx-auto">
                <h2 class="text-2xl font-bold text-[#d97706] mb-4 text-center">Types of Investments</h2>
                <!-- List of Investments -->
                <ul class="text-gray-600 space-y-2">
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Gold ETF</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Pension Funds</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Provident Funds</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Mutual Funds</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Corporate Deposits</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Recurring Deposits</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Term Deposits</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>RBI/Govt Bonds and Deposits</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Monthly Income Investments</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Fixed Maturity Plans</li>
                </ul>
            </div>
        </div>
    </section>
  </main>

@endsection