@extends('layouts/frontend')
@section('content')

      
<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6 ">
            <div>
                <img src="{{$trend->photo}}" alt="" class="img-fluid w-100 rounded my-2 h-100">
            </div>
           
        </div>
        <div class="col-12 col-md-6 mt-2">
            <h2 class="mb-md-3">{{$trend->name}}</h2>
            <p>Category : <span class="colorcode">{{$trend->category->name}}</span></p>
            <hr>
            <h4 class="colorcode my-2">{{$trend->price - ($trend->discount/100)*$trend->price}}MMK
                <span class="text-secondary text-decoration-line-through me-2">{{$trend->price}}MMK</span>
                <span class="text-danger">{{$trend->discount}}% Off</span>
            </h4>
            <hr>
            <p>{{$trend->description}}</p>
            <div class="my-md-3">
                <p class="m-1 text-secondary"><i class="fa-solid fa-crown"></i> 1 year AL Jazeera Brand Warranty</p>
                <p class="m-1 text-secondary"><i class="fa-solid fa-arrows-rotate"></i> 30 Days Return Policy</p>
                <p class="m-1 text-secondary"><i class="fa-solid fa-credit-card"></i> Cash on Delivery Available</p>
            </div>

            <span class="me-md-3 colorcode">Size </span>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">M</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">L</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label" for="inlineRadio3">XL</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label" for="inlineRadio3">XXL</label>
            </div>
            <div class="mt-3 addCart">
                <input type="number" name="qty" id="" class="inputN w-25 py-1 px-2 qty" value="1">
                <button class="shopnow btn cartBtn" data-id="{{$trend->id}}" data-name="{{$trend->name}}" data-image="         {{$trend->photo}}" data-price="{{$trend->price}}" data-discount="{{$trend->discount}}">Add to Cart</button>
            </div>
             <hr>
             <p>CodeNo - {{$trend->codeNo}}</p>
        </div>
    </div>
</div>
<!-- Related Post -->
<div class="container my-5">
    <div class="row">
        <h3 class="text-secondary"><span class="linkk">Related</span> Products</h3>
        @foreach($trend_detail as $trend)
          <div class="col-12 col-lg-3 my-3 product_border addCart">
            <div class="card mainBorder shadow">
             <a href="{{route('trenddetail',$trend->id)}}"><img src="{{$trend->photo}}" alt="" class="card-img-top product_border"></a>
              <div class="card-body pb-0">
                <span class=" bg_hot">{{$trend->discount}}%</span>
                <span class="text-secondary" style="font-size: smaller;">{{$trend->category->name}}</span>
                <h6 class="" style="font-weight: bold;">{{$trend->name}}</h6> 
                <span class="text-warning Daisy">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <button class="btn addcart cartBtn mt-3" data-id="{{$trend->id}}" data-name="{{$trend->name}}" data-image="         {{$trend->photo}}" data-price="{{$trend->price}}" data-discount="{{$trend->discount}}">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <a class="btn addcart me-2 mt-3 addtowish" href="{{route('item.show',$trend->id)}}">
                      <i class="fa-solid fa-circle-info"></i>
                    </a>  
                </span>   

                <p class="m-0 p-0 Daisy">
                @if($trend->discount>0)
                  <span class="text-decoration-line-through text-secondary">{{$trend->price}}MMK</span>
                </p>
                <p class="m-0 p-0 mmk">{{$trend->price - ($trend->discount/100)*$trend->price}} MMK</p>
              @else
               <p class=" mmk" style="font-weight: bold;">{{$trend->price}} MMK</p>   
              @endif 
              </div>
            </div>
          </div>
        @endforeach

    </div>

</div>

@endsection