<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Listing;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    //Show Application Form
    public function create() {
        return view ('applicants.create');
    }

    // Create Applicant's Application
    public function store(Request $request) {

        $formFields = $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'resume_link' => 'required',
                'application_letter' => 'required',
                'email' => ['required', 'email']
            ]
            );
        

        Applicant::create($formFields);

        return redirect('/')->with('message', "You've applied successfully");

    }
}
