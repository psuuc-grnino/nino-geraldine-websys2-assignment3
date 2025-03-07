<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo;

class PersonalInfoController extends Controller
{
    public function create()
    {
        return view('personalinfo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'sex' => 'required|in:Male,Female',
            'mobile_phone' => 'required|regex:/^09[0-9]{9}$/',
            'tel_no' => 'nullable|numeric',
            'birth_date' => 'required|date',
            'address' => 'required',
            'email' => 'required|email|max:100',
            'website' => 'nullable|url',
        ]);

        return back()->with('success', 'Information submitted successfully!');
    }
}