@extends('layouts.app')

@section('title', 'Banking')

@section('content')
  <!-- Main Content Section -->
  <main class="flex-grow bg-gray-50 pt-20">
      <section class="container mx-auto px-6 md:px-20 lg:px-40 py-16">
          <!-- Section Header -->
          <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Banking Services</h1>
          <p class="text-lg text-center text-gray-600 mb-12">Your gateway to secure banking and smart financial management.</p>

          <!-- Services Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Teller Services Card -->
              <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition duration-300">
                  <h2 class="text-2xl font-bold text-[#d97706] mb-4">Teller Services</h2>
                  <!-- List of teller services -->
                  <ul class="text-gray-600 space-y-2">
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Cash Withdrawal</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Cash Deposit</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Money Transfer</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Fixed Deposits</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Balance Inquiry</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Mini Statements</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Bank Account Opening</li>
                  </ul>
              </div>

              <!-- Other Services Card -->
              <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition duration-300">
                  <h2 class="text-2xl font-bold text-[#d97706] mb-4">Other Services</h2>
                  <!-- List of other services -->
                  <ul class="text-gray-600 space-y-2">
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Debit/Credit Cards, Cheque Books</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>KYC Updates</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Loan Applications</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Bill Payments</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Subscription Renewals</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Recharges</li>
                      <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Travel Bookings</li>
                  </ul>
              </div>
          </div>
      </section>
  </main>
@endsection
 