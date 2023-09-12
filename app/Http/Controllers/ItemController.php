<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use App\Models\Feature;
use App\Models\Newitem;
use App\Models\Sale;
use App\Models\Hot;
use App\Models\Deal;
use App\Models\Topselling;
use App\Models\Trend;



class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        $items=Item::take(8)->get();
        $features=Feature::take(8)->get();
        $newitems=Newitem::take(8)->get();
        $sales=Sale::take(1)->get();
        $hots=Hot::take(4)->get();
        $deals=Deal::take(4)->get();
        $topsellings=Topselling::take(4)->get();
        $trends=Trend::take(4)->get();
    
        return view('item.index',compact('categories','items','features','newitems','sales','hots','deals','topsellings','trends'));
    }



    // ///////////// cart/////////////////

    public function cart(){
        return view('item.cart');
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

     public function featureDetail(string $id){
        
        $feature=feature::find($id);
        // $feature_category=$feature->category_id;
        $feature_detail=Feature::where('category_id',$feature->category_id)->get();
        return view('item.featuredetail',compact('feature','feature_detail'));
    }

// ////////////////// popular detail (newitem) /////////
    public function popularDetail(string $id){
        
        $newitem=Newitem::find($id);
        $newitem_category=$newitem->category_id;
        $newitem_detail=Newitem::where('category_id',$newitem->category_id)->get();
        return view('item.populardetail',compact('newitem','newitem_detail'));
    }
/////////////////// hot detail ////////////
    public function hotDetail(string $id){
        
        $hot=Hot::find($id);
        $hot_category=$hot->category_id;
        $hot_detail=Hot::where('category_id',$hot->category_id)->get();
        return view('item.hotdetail',compact('hot','hot_detail'));
    }
// //////////////// sale detail /////////
    public function saleDetail(string $id){
        
        $sale=Sale::find($id);
        $sale_category=$sale->category_id;
        $sale_detail=Hot::where('category_id',$sale->category_id)->get();
        return view('item.saledetail',compact('sale','sale_detail'));
    }
// ////////////// deals and outlet detail //////////
    public function dealDetail(string $id){
        
        $deal=Deal::find($id);
        $deal_category=$deal->category_id;
        $deal_detail=Deal::where('category_id',$deal->category_id)->get();
        return view('item.dealdetail',compact('deal','deal_detail'));
    }
// //////////////// topselling detail /////////////////
    public function topDetail(string $id){
        
        $topselling=Topselling::find($id);
        $top_category=$topselling->category_id;
        $top_detail=Topselling::where('category_id',$topselling->category_id)->get();
        return view('item.topdetail',compact('topselling','top_detail'));
    }
////////////// trend detail  /////////////////////
    public function trendDetail(string $id){
        
        $trend=Trend::find($id);
        $trend_category=$trend->category_id;
        $trend_detail=Trend::where('category_id',$trend->category_id)->get();
        return view('item.trenddetail',compact('trend','trend_detail'));
    }
///////////// item detail /////////////
    public function show(string $id)
    {
        $item=Item::find($id);
        $item_category=$item->category_id;
        $item_detail=Item::where('category_id',$item->category_id)->get();
        return view('item.itemdetail',compact('item','item_detail'));
    }

    // ////////  shopppp /////////////
    
    public function shop(){
        $categories=Category::all();
        $items=Item::paginate(8);
        $features=Feature::paginate(8);
        $newitems=Newitem::paginate(8);
        $hots=Hot::paginate(7);
        $deals=Deal::paginate(7);
        $topsellings=Topselling::paginate(7);
        $trends=Trend::paginate(7);
    
        return view('item.shop',compact('categories','items','features','newitems','hots','deals','topsellings','trends'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
