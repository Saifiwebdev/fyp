@extends('admin.layout')
@section('tittle_page','Coupon');
@section('container')
@if(session('message'))
<div class="alert alert-danger">
    {{session('message')}}
</div>
@endif
<h1>Coupon</h1>
<br>
<a href="coupon/manage_coupon">
    <button class="btn btn-primary">Add Coupon</button>
</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Code</th>
                        <th>Value</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->title}}</td>
                        <td>{{$list->code}}</td>
                        <td>{{$list->value}}</td>
                        <td>
                            <a href="{{url('admin/coupon/delete/')}}/{{$list->id}}"><button class="btn btn-danger">Delete</button></a>
                            <a href="{{url('admin/coupon/manage_coupon/')}}/{{$list->id}}"><button class="btn btn-success">Edit</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
