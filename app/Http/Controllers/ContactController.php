<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'contact' => 'required|string|max:15',
        'message' => 'required|string',
    ]);

    Contact::create($validated);

    return response()->json(['success' => 'Thank you for reaching out! We will get back to you shortly.']);
}

}
