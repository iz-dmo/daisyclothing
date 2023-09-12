@extends('layouts.frontend')
@section('content')

<section class="bg-light mb-5 mt-2">
    <div class="container">
        <h6 class="text-secondary py-3">Home > Shop</h6>
    </div>
</section>
<div class="container">
    <h6 class="text-secondary">We found <span class="colorcode">70</span> items for you !</h6>
    <div class="row">
        <!--/////////////// feature /////////////////////// -->
        @foreach($features as $feature)
          <div class="col-12 col-lg-3 my-3 product_border addCart">
            <div class="card mainBorder shadow">
             <a href="{{route('featuredetail',$feature->id)}}"><img src="{{$feature->photo}}" alt="" class="card-img-top product_border"></a>
              <div class="card-body pb-0">
                <span class=" bg_hot">{{$feature->discount}}%</span>
                <span class="text-secondary" style="font-size: smaller;">{{$feature->category->name}}</span>
                <h6 class="" style="font-weight: bold;">{{$feature->name}}</h6> 
                <span class="text-warning Daisy">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <input type="hidden" class="qty" value="1">
                    <button class="btn addcart mt-3 cartBtn" data-id="{{$feature->id}}" data-name="{{$feature->name}}" data-image="{{$feature->photo}}" data-price="{{$feature->price}}" data-discount="{{$feature->discount}}">
                      <i class="fa-solid fa-cart-shopping" ></i>
                    </button>
                    <a class="btn addcart me-2 mt-3 addtowish" href="{{route('featuredetail',$feature->id)}}">
                      <i class="fa-solid fa-circle-info"></i>
                    </a>    
                </span>   

                <p class="m-0 p-0 Daisy">
                @if($feature->discount>0)
                  <span class="text-decoration-line-through text-secondary">{{$feature->price}}MMK</span>
                </p>
                <p class="m-0 p-0 mmk">{{$feature->price - ($feature->discount/100)*$feature->price}} MMK</p>
              @else
               <p class=" mmk" style="font-weight: bold;">{{$feature->price}} MMK</p>   
              @endif 
              </div>
            </div>
          </div>
        @endforeach
    

        <!--/////////////// popular////////////////// -->
        @foreach($newitems as $newitem)
          <div class="col-12 col-lg-3 my-3 product_border addCart">
            <div class="card mainBorder shadow">
             <a href="{{route('newitemdetail',$newitem->id)}}"><img src="{{$newitem->photo}}" alt="" class="card-img-top product_border"></a>
              <div class="card-body pb-0">
                <span class=" bg_new">{{$newitem->discount}}%</span>
                <span class="text-secondary" style="font-size: smaller;">{{$newitem->category->name}}</span>
                <h6 class="" style="font-weight: bold;">{{$newitem->name}}</h6> 
                <span class="text-warning Daisy">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <button class="btn addcart cartBtn mt-3" data-id="{{$newitem->id}}" data-name="{{$newitem->name}}" data-image="{{$newitem->photo}}" data-price="{{$newitem->price}}" data-discount="{{$newitem->discount}}">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <a class="btn addcart me-2 mt-3 addtowish" href="{{route('newitemdetail',$newitem->id)}}">
                      <i class="fa-solid fa-circle-info"></i>
                    </a>
                </span>   

                <p class="m-0 p-0 Daisy">
                @if($newitem->discount>0)
                  <span class="text-decoration-line-through text-secondary">{{$newitem->price}}MMK</span>
                </p>
                <p class="m-0 p-0 mmk">{{$newitem->price - ($newitem->discount/100)*$newitem->price}} MMK</p>
              @else
               <p class=" mmk" style="font-weight: bold;">{{$newitem->price}} MMK</p>   
              @endif 
              </div>
            </div>
          </div>
        @endforeach

        <!--///////////////////// item //////////////////// -->
        @foreach($items as $item)
          <div class="col-12 col-lg-3 my-3 product_border addCart">
            <div class="card mainBorder shadow">
             <a href="{{route('item.show',$item->id)}}"><img src="{{$item->photo}}" alt="" class="card-img-top product_border"></a>
              <div class="card-body pb-0">
                <span class=" bg_sell">{{$item->discount}}%</span>
                <span class="text-secondary" style="font-size: smaller;">{{$item->category->name}}</span>
                <h6 class="" style="font-weight: bold;">{{$item->name}}</h6> 
                <span class="text-warning Daisy">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <button class="btn addcart cartBtn mt-3" data-id="{{$item->id}}" data-name="{{$item->name}}" data-image="{{$item->photo}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <a class="btn addcart me-2 mt-3 addtowish" href="{{route('item.show',$item->id)}}">
                      <i class="fa-solid fa-circle-info"></i>
                    </a>
                </span>   

                <p class="m-0 p-0 Daisy">
                @if($item->discount>0)
                  <span class="text-decoration-line-through text-secondary">{{$item->price}}MMK</span>
                </p>
                <p class="m-0 p-0 mmk">{{$item->price - ($item->discount/100)*$item->price}} MMK</p>
              @else
               <p class=" mmk" style="font-weight: bold;">{{$item->price}} MMK</p>   
              @endif 
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>
<!-- ///////////////////  hot deal topselling and trend ///////////////// -->
<div class="container my-5">
    <div class="row">
                    <!-- hot Releases  -->
        <div class="col-12 col-md-3">
          <h5 class="mb-1">Hot Releases</h5>
          <span class="khr m-0"><hr class="chr d-inline m-0"><hr class="nhr d-inline m-0"></span>
          @foreach($hots as $hot)
            <div class="my-2 flexx">
                <img src="{{$hot->photo}}" alt="" class="img-fluid img_width rounded p-1">
                <a class="p-1 mt-3 nav-link" href="{{route('hotdetail',$hot->id)}}" style="font-size: 13px;">{{$hot->name}} 
                <br><span class="mmk">{{$hot->price - ($hot->discount/100)* $hot->price}} MMK
                    <span class="disc ms-2">{{$hot->discount}}% Off</span></span>
                </a>
            </div>
          @endforeach
        </div>

        <!-- Deals & Qulet -->

        <div class="col-12 col-md-3">
          <h5 class="mb-1">Deals & Outlet</h5>
          <span class="khr m-0"><hr class="chr d-inline m-0"><hr class="nhr d-inline m-0"></span>
          @foreach($deals as $deal)
            <div class="my-2 flexx">
                <img src="{{$deal->photo}}" alt="" class="img-fluid img_width rounded p-1">
                <a class="p-1 mt-3 nav-link" href="{{route('dealdetail',$deal->id)}}" style="font-size: 13px;">{{$deal->name}} 
                <br><span class="mmk">{{$deal->price - ($deal->discount/100)* $deal->price}} MMK
                    <span class="disc ms-2">{{$deal->discount}}% Off</span></span>
                </a>
            </div>
          @endforeach
        </div>

        <!-- Top Selling -->
        <div class="col-12 col-md-3">
          <h5 class="mb-1">Top Selling</h5>
          <span class="khr m-0"><hr class="chr d-inline m-0"><hr class="nhr d-inline m-0"></span>
          @foreach($topsellings as $topselling)
            <div class="my-2 flexx">
                <img src="{{$topselling->photo}}" alt="" class="img-fluid img_width rounded p-1">
                <a class="p-1 mt-3 nav-link" href="{{route('topsellingdetail',$topselling->id)}}" style="font-size: 13px;">{{$topselling->name}}
                <br><span class="mmk">{{$topselling->price - ($topselling->discount/100)*$topselling->price}} MMK
                    <span class="disc ms-2">{{$topselling->discount}}% Off</span></span>
                </a>
            </div>
          @endforeach
        </div>

        <!-- Trendy -->
        <div class="col-12 col-md-3">
          <h5 class="mb-1">Trendy</h5>
          <span class="khr m-0"><hr class="chr d-inline m-0"><hr class="nhr d-inline m-0"></span>
          @foreach($trends as $trend)
            <div class="my-2 flexx">
                <img src="{{$trend->photo}}" alt="" class="img-fluid img_width rounded p-1">
                <a class="p-1 mt-3 nav-link" href="{{route('trenddetail',$trend->id)}}" style="font-size: 13px;">{{$trend->name}}
                <br><span class="mmk">{{$trend->price - ($trend->discount/100)*$trend->price}}
                    <span class="disc ms-2">{{$trend->discount}}% Off</span></span>
                </a>
            </div>
          @endforeach
        </div>
    </div>
</div>



 <!-- start newsletter -->
 <section class="bg_letter mt-5 mb-3 py-2">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 pt-3 pb-2">
          <h5 class="text-white"><span> <i class="fa-regular fa-envelope fa-xl me-2"></i></span> Sign up to Newsletter</h5>
        </div>
        <div class="col-12 col-md-4 pt-3 mt-1">
          <p class="text-white">Receive 30000 MMK coupon for first shopping.</p>
        </div>
        <div class="col-12 col-md-4 pt-3 pb-1">
          <input type="email" class="subscribe px-2 py-1 ms-sm-4" placeholder="Enter your email">
          <button class="subtn py-1 px-2">Subscribe</button>
        </div>
      </div>
    </div>
  </section>

@endsection