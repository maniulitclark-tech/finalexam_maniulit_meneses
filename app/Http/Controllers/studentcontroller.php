<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentcontroller extends Controller
{
    public function index()
    {
        $student = student::all();
        return view('student.index', compact('student'));
    }


    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:255',
            'mname' => 'required|max:255',
            'lname' => 'required|max:255',
            'address' => 'required',
            'dob' => 'required',
            'contact' => 'required',
        ]);

    student::create($request->all());
    return redirect('student')->with('status', 'Student Created Successfully!');
    }
}
