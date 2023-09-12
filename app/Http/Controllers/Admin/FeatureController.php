<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Feature;
use App\Http\Requests\FeatureRequest;
use App\Http\Requests\FeatureUpdateRequest;


class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        $features=Feature::all();
        return view('admin.features.index',compact('categories','features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $features=Feature::all();
        $categories=Category::all();
        return view('admin.features.create',compact('features','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FeatureRequest $request)
    {
        $features=Feature::create($request->all());
        $fileName=time().'.'.$request->photo->extension();
        $upload=$request->photo->move(public_path('images/'),$fileName);
        if($upload){
            $features->photo="/images/".$fileName;
        }
        $features->save();
        return redirect()->route('backend.features.index');
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
    public function edit(string $id)
    {
        $feature=Feature::find($id);
        $categories=Category::all();
        return view('admin.features.edit',compact('feature','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FeatureUpdateRequest $request, string $id)
    {
        $feature=Feature::find($id);
        $feature->update($request->all());
        if($request->hasFile('new_photo')){
            $fileName=time().'.'.$request->new_photo->extension();
            $upload=$request->new_photo->move(public_path('images/'),$fileName);

            if($upload){
                $feature->photo="/images/".$fileName;
            }
        }else{
            $feature->photo=$request->old_photo;
        }
        $feature->save();
        return redirect()->route('backend.features.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feature=Feature::find($id);
        $feature->delete();
        return redirect()->route('backend.features.index');
    }
}
