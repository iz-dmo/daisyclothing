<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Newitem;
use App\Http\Requests\NewItemRequest;
use App\Http\Requests\NewItemUpdateRequest;


class NewItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        $newitems=Newitem::all();
        return view('admin.newitems.index',compact('categories','newitems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $newitems=Newitem::all();
        $categories=Category::all();
        return view('admin.newitems.create',compact('newitems','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewItemRequest $request)
    {
        $newitems=Newitem::create($request->all());
        $fileName=time().'.'.$request->photo->extension();
        $upload=$request->photo->move(public_path('images/'),$fileName);
        if($upload){
            $newitems->photo="/images/".$fileName;
        }
        $newitems->save();
        return redirect()->route('backend.newitems.index');
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
        $newitem=Newitem::find($id);
        $categories=Category::all();
        return view('admin.newitems.edit',compact('newitem','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewItemUpdateRequest $request, string $id)
    {
        $newitem=Newitem::find($id);
        $newitem->update($request->all());
        if($request->hasFile('new_photo')){
            $fileName=time().'.'.$request->new_photo->extension();
            $upload=$request->new_photo->move(public_path('images/'),$fileName);

            if($upload){
                $newitem->photo="/images/".$fileName;
            }
        }else{
            $newitem->photo=$request->old_photo;
        }
        $newitem->save();
        return redirect()->route('backend.newitems.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newitem=Newitem::find($id);
        $newitem->delete();
        return redirect()->route('backend.newitems.index');
    }
}
