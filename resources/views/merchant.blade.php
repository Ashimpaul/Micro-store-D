@extends('layouts.app')

@section('title', 'Merchants channel')

@section('content')
  <main class="flex-grow bg-gray-50 pt-24">
    <section class="container mx-auto px-6 md:px-20 lg:px-40 py-16">
      <div class="bg-white shadow-lg rounded-xl p-8 hover:shadow-2xl transition duration-300 mx-auto max-w-screen-md">
        <!-- Title -->
        <h1 class="text-4xl font-bold text-gray-800 mb-4 text-center" >
          Merchants channel partners
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
      @if(session('success'))
<script>
  document.addEventListener('DOMContentLoaded', function() {
    Swal.fire({
      title: 'Success!',
      text: "{{ session('success') }}",
      icon: 'success',
      confirmButtonText: 'OK'
    });
  });
</script>
@endif

      <form action="{{route('form.submit')}}" method="POST">
      @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- State Dropdown -->
<div class="mb-4">
    <label for="state" class="block text-gray-700 font-medium mb-2">State</label>
    <select id="state" name="state" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" required>
        <option value="">Select State</option>
        @foreach($states as $state)
        <option value="{{$state->id}}">{{$state->name}}</option>
        @endforeach
    </select>
</div>

<!-- District Dropdown -->
<div class="mb-4">
    <label for="district" class="block text-gray-700 font-medium mb-2">District</label>
    <select id="district" name="district" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" required>
        <option value="">Select District</option>
    </select>
</div>

<!-- Include JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const stateSelect = document.getElementById('state');
        const districtSelect = document.getElementById('district');

        stateSelect.addEventListener('change', function () {
            const stateId = this.value;
            districtSelect.innerHTML = '<option value="">Loading...</option>';

            if (stateId) {
                fetch(`/districts/${stateId}`)
                    .then(response => response.json())
                    .then(districts => {
                        districtSelect.innerHTML = '<option value="">Select District</option>';
                        for (const [id, name] of Object.entries(districts)) {
                            districtSelect.innerHTML += `<option value="${id}">${name}</option>`;
                        }
                    })
                    .catch(error => {
                        districtSelect.innerHTML = '<option value="">Error loading districts</option>';
                        console.error(error);
                    });
            } else {
                districtSelect.innerHTML = '<option value="">Select District</option>';
            }
        });
    });
</script>


          <!-- Address -->
          <div class="mb-4 md:col-span-2">
            <label for="address" class="block text-gray-700 font-medium mb-2">Address</label>
            <input type="text" id="address" name="address" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" placeholder="Your Address" required>
          </div>

          <!-- Full Name -->
          <div class="mb-4">
            <label for="fullname" class="block text-gray-700 font-medium mb-2">Full Name</label>
            <input type="text" id="fullname" name="fullname" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" placeholder="Your Full Name" required>
          </div>

          <!-- Designation -->
          <div class="mb-4">
            <label for="designation" class="block text-gray-700 font-medium mb-2">Designation</label>
            <input type="text" id="designation" name="designation" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" placeholder="Your Designation" required>
          </div>

          <!-- Name of Organisation -->
          <div class="mb-4 md:col-span-2">
            <label for="organisation" class="block text-gray-700 font-medium mb-2">Name of Organisation</label>
            <input type="text" id="organisation" name="organisation"  class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500" placeholder="Name of Organisation" required>
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