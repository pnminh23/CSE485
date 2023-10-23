<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MyClass;
use Illuminate\Http\Request;

class MyClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $myClasses = MyClass::all();
        return view('myclasses.index',compact('myClasses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('myClasses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name_class' => 'required',
        ]);
        MyClass::create($request->all());
        return redirect()->route('myClasses.index')->with('success','Thêm lớp thành công');

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
    public function edit(MyClass $myClass)
    {
        //
        return view('myClasses.edit',compact('myClass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyClass $myClass)
    {
        //
        $request->validate([
            'name_class'=> 'required',
        ]);
        $myClass->update($request->all());
        return redirect()->route('myClasses.index')->with('success','Class update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyClass $myClass)
    {
        //
        $myClass->delete();
        return redirect()->route('myClasses.index')->with('success','Class delete successfully');

    }
}
