@extends('admin.layout')
@section('tittle_page','Category')
@section('category_select','active')
@section('container')
@if(session('message'))
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{session('message')}}
  </div>
@endif
<h1>Category</h1>
<br>
<a href="category/manage_category">
    <button class="btn btn-primary">Add Category</button>
</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Category Slug</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->category_name}}</td>
                        <td>{{$list->category_slug}}</td>
                        <td class="text-center">
                            <a href="{{url('admin/category/delete/')}}/{{$list->id}}"><button class="btn btn-danger">Delete</button></a>
                            <a href="{{url('admin/category/manage_category/')}}/{{$list->id}}"><button class="btn btn-success">Edit</button></a>
                        </td>
                        <td class="text-center">
                            @if($list->status == 0)
                            <a href="{{url('admin/category/status/1')}}/{{$list->id}}"><button class="btn btn-primary">Active</button></a>
                            @elseif($list->status == 1)
                            <a href="{{url('admin/category/status/0')}}/{{$list->id}}"><button class="btn btn-warning">Deactive</button></a>
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
