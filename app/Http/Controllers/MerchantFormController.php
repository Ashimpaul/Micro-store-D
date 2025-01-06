<?php

namespace App\Http\Controllers;
use App\Models\State;
use Illuminate\Http\Request;

class MerchantFormController extends Controller
{
    public function submit(Request $request){
        //validate the form data
        $validated = $request->validate([
            'state' => 'required|exists:states,id',
            'district' => 'required|string',
            'address' => 'required|string|max:255',
            'fullname' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'organisation' => 'required|string|max:255',
        ]);

        \DB::table('submissions')->insert($validated);

        return redirect()->back()->with('success', 'Form submitted successfully!');


    }

    public function index()
    {
        $states = State::all();
        return view('merchant', compact('states'));
    }

    public function getDistricts($stateId)
{
    $state = State::findOrFail($stateId);

    // Assuming districts are fetched from the table specified in `districts_tables` column
    $districts = \DB::table($state->districts_tables)->pluck('name', 'id');

    return response()->json($districts);
}

}
