@extends('admin.layout')
@section('tittle_page','Manage Color')
@section('container')
<h1>Manage Color</h1>
<br>
<a href="{{url('admin/color')}}">
    <button class="btn btn-primary">Back</button>
</a>
<div class="row m-t-30">
    <div class="col-md-8 m-auto">
        <div class="card">
            {{-- <div class="card-header">Add Categroy</div> --}}
            <div class="card-body">
                <form action="{{route('color.insert')}}" method="post">
                    @csrf
                    <div class="form-group has-success">
                        <label for="category" class="control-label mb-1">Color</label>
                        <input id="category" name="color" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                            @error('color')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <span id="payment-button-amount">Submit</span>
                        </button>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
