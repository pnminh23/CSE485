<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\Region;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $flowers = Flower::orderByDesc('id')->paginate(5);
        return view("flowers.index", compact("flowers"))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $regions = Region::all();
        return view("flowers.create",compact("regions"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $fileName = '';

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $extension = $file->getClientOriginalExtension();
            $allowedExtensions = ['jpg','jpeg','png','gif','svg'];
             if (!in_array($extension, $allowedExtensions)) {
                return redirect()->route('flowers.index')->with('error','Only JPG,JPEG,PNG,SVG and GIF files are allowed');
             }
             $fileName = $request->getSchemeAndHttpHost() . '/images/' . time () .'.'. $extension;
             $file->move (public_path('/images/'), $fileName);
        }
        
        Flower::create([
            "name"=> $request->name,
            "description"=> $request->description,
            "image_url" => $fileName,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at,
        ]);
        return redirect()->route("flowers.index")->with("success","Thêm mới loài hoa thành công!") ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Flower $flower)
    {
        //
        // $flower = Flower::where("id",$flower->id)->first();
        return view("flowers.show",compact("flower"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        //
        $flower = Flower::where("id",$flower->id)->first();
        return view("flowers.edit",compact("flower"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
        //
        $fileName = '';

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $extension = $file->getClientOriginalExtension();
            $allowedExtensions = ['jpg','jpeg','png','gif','svg'];
             if (!in_array($extension, $allowedExtensions)) {
                return redirect()->route('flowers.index')->with('error','Only JPG,JPEG,PNG,SVG and GIF files are allowed');
             }
             $fileName = $request->getSchemeAndHttpHost() . '/images/' . time () .'.'. $extension;
             $file->move (public_path('/images/'), $fileName);
        }
        
        $flower->update([
            "name"=> $request->name,
            "description"=> $request->description,
            "image_url" => $fileName,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at,
        ]);
        return redirect()->route("flowers.index")->with("success","Cập nhật loài hoa thành công!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        //
        $flower->delete();
        return redirect()->route("flowers.index")->with("success","Xoá loài hoa thành công!");
    }
}
