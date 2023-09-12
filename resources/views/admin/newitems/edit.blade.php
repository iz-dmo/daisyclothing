@extends('layouts.backend')
@section('content')
<!-- @php 
    var_dump($errors);
@endphp -->
<div class="container px-3">
    <div class="card my-5">
        <div class="card-header colorbg">
            <h5 class="d-inline">New Items Edit</h5>
            <a href="{{route('backend.newitems.index')}}" class="btn btn-danger float-end">Cancel</a>
        </div>
        <div class="card-body">
            <form action="{{route('backend.newitems.update',$newitem->id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="mb-3">
                    <label for="codeNo" class="form-label ">CodeNo</label>
                    <input type="text" class="form-control formBorder {{$errors->has('codeNo') ? 'is-invalid' : ''}}" name="codeNo" value="{{$newitem->codeNo}}">
                    @if($errors->has('codeNo'))
                        <div class="invalid-feedback">
                            {{$errors->first('codeNo')}}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="ItemName" class="form-label">ItemName</label>
                    <input type="text" class="form-control formBorder {{$errors->has('name') ? 'is-invalid' : ''}}" id="ItemName" name="name" value="{{$newitem->name}}">
                     @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control formBorder {{$errors->has('price') ? 'is-invalid' : ''}}" id="price" name="price" value="{{$newitem->price}}">
                     @if($errors->has('price'))
                        <div class="invalid-feedback">
                            {{$errors->first('price')}}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" class="form-control formBorder {{$errors->has('discount') ? 'is-invalid' : ''}}" id="discount" name="discount" value="{{$newitem->discount}}">
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
                        <option value="{{$category->id}}" {{$newitem->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="instock" class="form-label">Instock</label>
                    <input type="number" class="form-control formBorder {{$errors->has('instock') ? 'is-invalid' : ''}}" id="instock" name="instock" value="{{$newitem->instock}}">
                     @if($errors->has('instock'))
                        <div class="invalid-feedback">
                            {{$errors->first('instock')}}
                        </div>
                    @endif
                </div>
                 <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Photo</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">New Photo</button>
                        </li>
                      
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <img src="{{$newitem->photo}}" alt="" class="py-3 img-fluid w-25">
                            <input type="hidden" name="old_photo" value="{{$newitem->photo}}">
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                             <input class="form-control formBorder my-3 {{$errors->has('photo') ? 'is-invalid' : ''}}" type="file" id="photo" name="new_photo" accept="image/*">
                            @if($errors->has('photo'))
                                <div class="invalid-feedback">
                                    {{$errors->first('photo')}}
                                </div>
                            @endif
                        </div>
                    </div>
                   
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control formBorder {{$errors->has('description') ? 'is-invalid' : ''}}" id="description" rows="3" name="description">{{$newitem->description}}</textarea>
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