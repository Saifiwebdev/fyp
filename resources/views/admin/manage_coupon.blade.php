@extends('admin.layout')
@section('tittle_page','Manage Coupon')
@section('container')
<h1>Manage Coupon</h1>
<br>
<a href="{{url('admin/coupon')}}">
    <button class="btn btn-primary">Back</button>
</a>
<div class="row m-t-30">
    <div class="col-md-8 m-auto">
        <div class="card">
            {{-- <div class="card-header">Add Categroy</div> --}}
            <div class="card-body">
                <form action="{{route('coupon.insert')}}" method="post">
                    @csrf
                    <div class="form-group has-success">
                        <label for="category" class="control-label mb-1">Title</label>
                        <input id="category" name="title" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                            @error('title')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_slug" class="control-label mb-1">Code</label>
                        <input id="category_slug" name="code" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                            @error('code')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_slug" class="control-label mb-1">Value</label>
                        <input id="category_slug" name="value" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                            @error('value')
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
