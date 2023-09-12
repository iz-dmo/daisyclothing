<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use App\Http\Requests\ItemRequest;
use App\Http\Requests\ItemUpdateRequest;


class NewaddedItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        $items=Item::all();
        return view('admin.newaddeditems.index',compact('categories','items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items=Item::all();
        $categories=Category::all();
        return view('admin.newaddeditems.create',compact('items','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemRequest $request)
    {
        $items=Item::create($request->all());
        $fileName=time().'.'.$request->photo->extension();
        $upload=$request->photo->move(public_path('images/'),$fileName);
        if($upload){
            $items->photo="/images/".$fileName;
        }
        $items->save();
        return redirect()->route('backend.newaddeditems.index');
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
        $item=Item::find($id);
        $categories=Category::all();
        return view('admin.newaddeditems.edit',compact('item','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemUpdateRequest $request, string $id)
    {
        $Item=Item::find($id);
        $Item->update($request->all());
        if($request->hasFile('new_photo')){
            $fileName=time().'.'.$request->new_photo->extension();
            $upload=$request->new_photo->move(public_path('images/'),$fileName);

            if($upload){
                $Item->photo="/images/".$fileName;
            }
        }else{
            $Item->photo=$request->old_photo;
        }
        $Item->save();
        return redirect()->route('backend.newaddeditems.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Item=Item::find($id);
        $Item->delete();
        return redirect()->route('backend.newaddeditems.index');
    }
}
