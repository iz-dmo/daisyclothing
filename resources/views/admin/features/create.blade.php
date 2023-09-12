@extends('layouts.backend')
@section('content')
<!-- @php 
    var_dump($errors);
@endphp -->
<div class="container px-3">
    <div class="card my-5">
        <div class="card-header colorbg">
            <h5 class="d-inline">Featured Items Create</h5>
            <a href="{{route('backend.features.index')}}" class="btn btn-danger float-end">Cancel</a>
        </div>
        <div class="card-body">
            <form action="{{route('backend.features.store')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="mb-3">
                    <label for="codeNo" class="form-label ">CodeNo</label>
                    <input type="text" class="form-control formBorder {{$errors->has('codeNo') ? 'is-invalid' : ''}}" name="codeNo">
                    @if($errors->has('codeNo'))
                        <div class="invalid-feedback">
                            {{$errors->first('codeNo')}}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="ItemName" class="form-label">ItemName</label>
                    <input type="text" class="form-control formBorder {{$errors->has('name') ? 'is-invalid' : ''}}" id="ItemName" name="name" placeholder="">
                     @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control formBorder {{$errors->has('price') ? 'is-invalid' : ''}}" id="price" name="price">
                     @if($errors->has('price'))
                        <div class="invalid-feedback">
                            {{$errors->first('price')}}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" class="form-control formBorder {{$errors->has('discount') ? 'is-invalid' : ''}}" id="discount" name="discount">
                     @if($errors->has('discount'))
                        <div class="invalid-feedback">
                            {{$errors->first('discount')}}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="category_id" id="category" class="form-control formBorder {{$errors->has('category_id') ? 'is-invalid' : ''}}">
                         @if($errors->has('category_id'))
                        <div class="invalid-feedback">
                            {{$errors->first('category_id')}}
                        </div>
                    @endif
                        <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="instock" class="form-label">Instock</label>
                    <input type="number" class="form-control formBorder {{$errors->has('instock') ? 'is-invalid' : ''}}" id="instock" name="instock">
                     @if($errors->has('instock'))
                        <div class="invalid-feedback">
                            {{$errors->first('instock')}}
                        </div>
                    @endif
                </div>
                 <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input class="form-control formBorder {{$errors->has('photo') ? 'is-invalid' : ''}}" type="file" id="photo" name="photo" accept="image/*">
                     @if($errors->has('photo'))
                        <div class="invalid-feedback">
                            {{$errors->first('photo')}}
                        </div>
                    @endif
                 </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control formBorder {{$errors->has('description') ? 'is-invalid' : ''}}" id="description" rows="3" name="description"></textarea>
                     @if($errors->has('description'))
                        <div class="invalid-feedback">
                            {{$errors->first('description')}}
                        </div>
                    @endif
                </div>
                 <button class="btn btn-primary w-100 mt-3 createbtn" type="submit">Submit</button>
            </form>
        </div>
    </div>
  
</div>

@endsection