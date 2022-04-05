@extends('admin.layout')
@section('tittle_page','Update Category')
@section('container')

<h1>Update Category</h1>
<br>
<a href="{{url('admin/category')}}">
    <button class="btn btn-primary">Back</button>
</a>
<div class="row m-t-30">
    <div class="col-md-8 m-auto">
        <div class="card">
            {{-- <div class="card-header">Add Categroy</div> --}}
            <div class="card-body">
                <form action="{{url('/admin/category/manage_category/update')}}/{{$model->id}}" method="post">
                    @csrf
                    <div class="form-group has-success">
                        <label for="category" class="control-label mb-1">Category Name</label>
                        <input id="category" name="category_name" value="{{$model->category_name}}" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                            @error('category_name')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_slug" class="control-label mb-1">Category Slug</label>
                        <input id="category_slug" name="category_slug" value="{{$model->category_slug}}" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                            @error('category_slug')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
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
