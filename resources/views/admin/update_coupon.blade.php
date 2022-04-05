@extends('admin.layout')
@section('tittle_page','Update Coupon')
@section('container')

<h1>Update Coupon</h1>
<br>
<a href="{{url('admin/coupon')}}">
    <button class="btn btn-primary">Back</button>
</a>
<div class="row m-t-30">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-body">
                <form action="{{url('/admin/coupon/manage_coupon/update')}}/{{$model->id}}" method="post">
                    @csrf
                    <div class="form-group has-success">
                        <label for="category" class="control-label mb-1">Title</label>
                        <input id="" name="title" value="{{$model->title}}" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                    </div>
                    <div class="form-group">
                        <label for="category_slug" class="control-label mb-1">Code</label>
                        <input id="" name="code" value="{{$model->code}}" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div class="form-group">
                        <label for="category_slug" class="control-label mb-1">Value</label>
                        <input id="" name="value" value="{{$model->value}}" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div>
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
