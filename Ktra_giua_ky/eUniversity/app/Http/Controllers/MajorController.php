<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $majors = Major::orderByDesc('id')->paginate(5);
        return view('majors.index',compact('majors'))->with('i', (request()->input('page',1)-1)*5)  ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('majors.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'description'=> 'required',
            'duration'=> 'required',
        ]);
        Major::create($request->all());
        return redirect()->route('majors.index')->with('success','Major create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Major $major)
    {
        //
        $major = Major::where('id',$major->id)->first();
        return view('majors.show',compact('major')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Major $major)
    {
        //
        return view('majors.edit',compact('major')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Major $major)
    {
        //
        $request->validate([
            'name'=>'required',
            'description'=> 'required',
            'duration'=> 'required',
        ]);
        $major->update($request->all());
        return redirect()->route('majors.index')->with('success','Major update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        //
        $major->delete();
        return redirect()->route('majors.index')->with('success','Major Delete Successfully');
    }
}
