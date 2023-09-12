@extends('layouts.backend')
@section('content')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="my-5 colorcode text-center">New Items</h1>

                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                New Items Table 
                                <a href="{{route('backend.newaddeditems.create')}}" class="btn createbtn float-end text-light">Create Item</a>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table table-info table-striped-columns">
                                    <thead>
                                        <tr>
                                        <th>CodeNo</th>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th class="">Instock</th>
                                        <th>Action</th> 
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>CodeNo</th>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th class="">Instock</th>
                                        <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="tBody">
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{$item->codeNo}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->price}} MMK</td>
                                            <td>{{$item->discount}} %</td>
                                            <td class="">{{$item->instock}}</td>
                                            <td>
                                                <a href="{{route('backend.newaddeditems.edit',$item->id)}}" class="btn btn-success ms-md-3">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                                <button class="btn btn-danger ms-md-2 delete" data-id="{{$item->id}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

<!-- ////// Delete Modal ////////// -->

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="deleteModalLabel">itemd Item</h1>
        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class="text-danger">Are you sure to delete?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form action="" method="POST" id="deleteForm">
            {{csrf_field()}}
            {{method_field('delete')}}
            <button type="submit" class="btn btn-danger">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

<script>
    $(document).ready(function(){
        $('#tBody').on('click','.delete',function(){
            // alert('hello');
            let id=$(this).data('id');
            $('#deleteForm').prop('action','newaddeditems/'+id);
            $('#deleteModal').modal('show');
        })
    })
</script>


@endsection