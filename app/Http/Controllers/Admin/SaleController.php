<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sale;
use App\Http\Requests\SaleRequest;
use App\Http\Requests\SaleUpdateRequest;


class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        $sales=Sale::all();
        return view('admin.saleitems.index',compact('categories','sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sales=Sale::all();
        $categories=Category::all();
        return view('admin.saleitems.create',compact('sales','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaleRequest $request)
    {
        $sales=Sale::create($request->all());
        $fileName=time().'.'.$request->photo->extension();
        $upload=$request->photo->move(public_path('images/'),$fileName);
        if($upload){
            $sales->photo="/images/".$fileName;
        }
        $sales->save();
        return redirect()->route('backend.saleitems.index');
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
        $sale=Sale::find($id);
        $categories=Category::all();
        return view('admin.saleitems.edit',compact('sale','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaleUpdateRequest $request, string $id)
    {
        $sale=Sale::find($id);
        $sale->update($request->all());
        if($request->hasFile('new_photo')){
            $fileName=time().'.'.$request->new_photo->extension();
            $upload=$request->new_photo->move(public_path('images/'),$fileName);

            if($upload){
                $sale->photo="/images/".$fileName;
            }
        }else{
            $sale->photo=$request->old_photo;
        }
        $sale->save();
        return redirect()->route('backend.saleitems.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sale=Sale::find($id);
        $sale->delete();
        return redirect()->route('backend.saleitems.index');
    }
}
