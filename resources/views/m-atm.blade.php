@extends('layouts.app')

@section('title', 'M-ATM Page')

@section('content')

<!-- Main Content Section -->
<main class="flex-grow bg-gray-50 pt-24">
    <section class="container mx-auto flex justify-center items-center px-6 md:px-20 lg:px-40 py-16">
        <div class="bg-white shadow-md rounded-lg p-8 hover:shadow-lg transition duration-300 max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg mx-auto">
            <!-- Title -->
            <h3 class="text-4xl font-bold text-gray-800 mb-6 text-center">M-ATM</h3>
            
            <!-- Description -->
            <p class="text-lg text-gray-600 leading-relaxed">
                Access comprehensive financial and payment services with <strong>M-ATM</strong>, supporting all major banks and platforms worldwide.
            </p>
            
            <!-- Platforms Supported -->
            <h4 class="text-2xl font-semibold text-gray-700 mt-6 mb-2">Platforms Supported</h4>
            <p class="text-lg text-gray-600 leading-relaxed">
                Visa, MasterCard, Diners, American Express, Rupay, JCB, Discover, UnionPay, Paytm, GPay, PhonePe, AEPS, BBPS, IMPS, UPI, Fastag, and many more.
            </p>

            <!-- Banking Services -->
            <h4 class="text-2xl font-semibold text-gray-700 mt-6 mb-2">Banking Services</h4>
            <p class="text-lg text-gray-600 leading-relaxed">
                Open and close savings, current, fixed deposit, and recurring deposit accounts. Balance inquiry, mini-statements, account transfers, and other ATM or teller counter services.
            </p>

            <!-- Cash Services -->
            <h4 class="text-2xl font-semibold text-gray-700 mt-6 mb-2">Cash Services</h4>
            <p class="text-lg text-gray-600 leading-relaxed">
                Withdrawals, deposits, and transfers with ease.
            </p>

            <!-- Payment Services -->
            <h4 class="text-2xl font-semibold text-gray-700 mt-6 mb-2">Payments</h4>
            <p class="text-lg text-gray-600 leading-relaxed">
                Taxes, utilities, remittances, bills, recharges, travel tickets, hotel bookings, and more.
            </p>

            <!-- Investment Services -->
            <h4 class="text-2xl font-semibold text-gray-700 mt-6 mb-2">Investments</h4>
            <p class="text-lg text-gray-600 leading-relaxed">
                Insurance, mutual funds, units, bonds, stocks, and deposits.
            </p>

            <!-- Benefits -->
            <h4 class="text-2xl font-semibold text-gray-700 mt-6 mb-2">Benefits</h4>
            <ul class="list-disc list-inside text-lg text-gray-600 leading-relaxed">
                <li>Reach and accessibility</li>
                <li>Convenience of proximity</li>
                <li>Simplified technology</li>
                <li>Secure transactions</li>
                <li>Increased walk-ins</li>
                <li>Supplementary revenues</li>
            </ul>
        </div>
    </section>
</main>

@endsection