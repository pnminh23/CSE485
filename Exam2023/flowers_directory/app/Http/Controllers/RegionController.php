<?php

namespace App\Http\Controllers;
use App\Models\Flower;
use App\Models\Region;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $regions = Region::orderByDesc("id")->paginate(4);
        return view("regions.index", compact("regions"))->with("i",(request()->input("page",1)-1)*4);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $flowers = Flower::all();
        return view("regions.create", compact("flowers"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "flower_id"=> "required",
            "region_name"=> "required"
            
        ]);
        Region::create($request->all());
        return redirect()->route('regions.index')->with("success","Thêm mới khu vực thành công");
    }

    /**
     * Display the specified resource.
     */
    public function show(region $region)
    {
        //
        $region = Region::where('id',$region->id)->first();
        return view('regions.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(region $region)
    {
        //
        $flowers = Flower::all();
        return view('regions.edit', compact('region','flowers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, region $region)
    {
        //
        $request->validate([
            'name'=> 'required',
            'flower_id'=> 'required',
        ]);
        $region->update($request->all());
        return redirect()->route('regions.index')->with('success','Cập nhật khu vực thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(region $region)
    {
        //
        $region->delete();
        return redirect()->route('regions.index')->with('success','Xoá khu vực thành công');
    }
}
