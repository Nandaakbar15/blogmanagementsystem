<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{   
    // view form page
    public function viewForm()
    {
        return view('form');
    }

    // check the validation
    public function checkForm(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email'
        ]);

        return back()->with('success', 'Form successful!');
    }
}
