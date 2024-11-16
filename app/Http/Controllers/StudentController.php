<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = Student::simplePaginate(8)->onEachSide(2);
        $totalStudents = Student::count();

        // when enter the false value, it will redirect to the 'students.index' page
        if ($students->isEmpty() && $students->currentPage() > 1) {
            // return redirect()->back();
            return redirect()->route('students.index');
        }

        // when enter the negative value, it will redirect to the 'students.index' page
        if ($request->has('page') && $request->page < 1) {
            return redirect()->route('students.index', ['page' => 1]);
        }


        return view('students.index', [
            'students' => $students,
            'totalStudents' => $totalStudents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
