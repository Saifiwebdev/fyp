@extends('admin.layout')
@section('tittle_page','Product')
@section('product_select','active')
@section('container')
@if(session('message'))
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{session('message')}}
  </div>
@endif
<h1>Product</h1>
<br>
<a href="product/manage_product">
    <button class="btn btn-primary">Add Product</button>
</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Brand</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->name}}</td>
                        <td>{{$list->brand}}</td>
                        <td class="text-center"><img src="{{asset('storage/media/'.$list->image)}}" alt="img" width="100px"></td>
                        <td class="text-center">
                            <a href="{{url('admin/product/delete/')}}/{{$list->id}}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                            <a href="{{url('admin/product/manage_product/')}}/{{$list->id}}"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                        </td>
                        <td class="text-center">
                            @if($list->status == 0)
                            <a href="{{url('admin/product/status/1')}}/{{$list->id}}"><button class="btn btn-primary">Active</button></a>
                            @elseif($list->status == 1)
                            <a href="{{url('admin/product/status/0')}}/{{$list->id}}"><button class="btn btn-warning">Deactive</button></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
