<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudent()
    {
        $students = Students::with('classes')->get();

        return view('Lab3.student', compact('students'));
    }
}
