@extends('admin.layout')
@section('tittle_page','Category');
@section('container')
@if(session('message'))
<div class="alert alert-danger">
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->category_name}}</td>
                        <td>{{$list->category_slug}}</td>
                        <td>
                            <a href="{{url('admin/category/delete/')}}/{{$list->id}}"><button class="btn btn-danger">Delete</button></a>
                            <a href="{{url('admin/category/manage_category/')}}/{{$list->id}}"><button class="btn btn-success">Edit</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
