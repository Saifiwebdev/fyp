@extends('admin.layout')
@section('tittle_page','Color')
@section('color_select','active')
@section('container')
@if(session('message'))
<div class="alert alert-danger">
    {{session('message')}}
</div>
@endif
<h1>Color</h1>
<br>
<a href="color/manage_color">
    <button class="btn btn-primary">Add Color</button>
</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Color</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->color}}</td>
                        <td class="text-center">
                            <a href="{{url('admin/color/delete/')}}/{{$list->id}}"><button class="btn btn-danger">Delete</button></a>
                            <a href="{{url('admin/color/manage_color/')}}/{{$list->id}}"><button class="btn btn-success">Edit</button></a>
                        </td>
                        <td class="text-center">
                            @if($list->status == 0)
                            <a href="{{url('admin/color/status/1')}}/{{$list->id}}"><button class="btn btn-primary">Active</button></a>
                            @elseif($list->status == 1)
                            <a href="{{url('admin/color/status/0')}}/{{$list->id}}"><button class="btn btn-warning">Deactive</button></a>
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
