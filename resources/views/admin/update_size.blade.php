@extends('admin.layout')
@section('tittle_page','Update Size')
@section('container')

<h1>Update Size</h1>
<br>
<a href="{{url('admin/size')}}">
    <button class="btn btn-primary">Back</button>
</a>
<div class="row m-t-30">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-body">
                <form action="{{url('/admin/size/manage_size/update')}}/{{$model->id}}" method="post">
                    @csrf
                    <div class="form-group has-success">
                        <label for="category" class="control-label mb-1">Size</label>
                        <input id="" name="size" value="{{$model->size}}" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                    </div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <span id="payment-button-amount">Update</span>
                        </button>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
