<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\MyClass;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::with('myClass')->get();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $myClasses = MyClass::all(); 
        return view('students.create',compact('myClasses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'myclass_id' => 'required',
        ]);
        Student::create($request->all());
        return redirect()->route('students.index')->with('success','student create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
        $myClasses = MyClass::all(); 
        return view('students.edit',compact('student','myClasses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
        $request -> validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone_number'=> 'required',
            'myclass_id'=> 'required',
        ]);
    
        $student->update($request->all());
        return redirect()->route('students.index')->with('success','student update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
        $student->delete();
        return redirect()->route('students.index')->with('success','Student delete successfully');

    }
}
