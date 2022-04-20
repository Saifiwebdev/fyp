@extends('admin.layout')
@section('tittle_page','Manage Product')
@section('container')
<h1>Manage Product</h1>
<br>
<a href="{{url('admin/product')}}">
    <button class="btn btn-primary">Back</button>
</a>
<div class="row m-t-30">
    <div class="col-md-8 m-auto">
        <div class="card">
            {{-- <div class="card-header">Add Categroy</div> --}}
            <div class="card-body">
                <h3 class="mb-3">Product Detail</h3>
                <form action="{{route('product.insert')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Product Name</label>
                        <input id="" name="name" type="text" class="form-control cc-number identified visa" value="" >
                            @error('name')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Product Slug</label>
                        <input id="" name="slug" type="text" class="form-control cc-number identified visa" value="" >
                            @error('slug')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Product Image</label>
                        <input id="" name="image" type="file" class="form-control cc-number identified visa" value="" >
                            @error('image')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group has-success">
                                <label for="category_id" class="control-label mb-1">Category</label>
                                {{-- <input id="product" name="category_id" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error"> --}}
                                <select name="category_id" id="" aria-required="true" aria-invalid="false" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($category as $list)
                                    <option value="{{$list->id}}">{{$list->category_name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="control-label mb-1">Brand Name</label>
                            <input id="" name="brand" type="text" class="form-control cc-number identified visa" value="" >
                                @error('brand')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="control-label mb-1">Model</label>
                            <input id="" name="model" type="text" class="form-control cc-number identified visa" value="" >
                                @error('model')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Short Description</label>
                        <input id="" name="short_desc" type="text" class="form-control cc-number identified visa" value="" >
                            @error('short_desc')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Description</label>
                        <input id="" name="desc" type="tel" class="form-control cc-number identified visa" value="" >
                            @error('desc')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Keywords</label>
                        <input id="" name="keywords" type="text" class="form-control cc-number identified visa" value="" >
                            @error('keywords')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Technichal Specification</label>
                        <input id="" name="technical_specificaiton" type="text" class="form-control cc-number identified visa" value="" >
                            @error('technical_specificaiton')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Product Uses</label>
                        <input id="" name="uses" type="text" class="form-control cc-number identified visa" value="" >
                            @error('uses')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Product Warranty</label>
                        <input id="" name="warranty" type="text" class="form-control cc-number identified visa" value="" >
                            @error('warranty')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="border p-2 mb-3" id="product_attr_box">
                        <h3 class="mb-3 mt-2">Product Attributes</h3>
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="sku">SKU</label>
                                <input id="sku" name="sku[]" type="text" class="form-control cc-number identified visa" value="" >
                            </div>
                            <div class="col-lg-3">
                                <label for="mrp">MRP</label>
                                <input id="mrp" name="mrp[]" type="text" class="form-control cc-number identified visa" value="" >
                            </div>
                            <div class="col-lg-3">
                                <label for="price">Price</label>
                                <input id="price" name="price[]" type="text" class="form-control cc-number identified visa" value="" >
                            </div>
                            <div class="col-lg-3">
                                <label for="size">Size</label>
                                <select name="size_id[]" id="" aria-required="true" aria-invalid="false" class="form-control">
                                    <option value="">Select</option>
                                    @foreach ($sizes as $list)
                                    <option value="{{$list->id}}">{{$list->size}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="color">Color</label>
                                <select name="color_id[]" id="color" aria-required="true" aria-invalid="false" class="form-control">
                                    <option value="">Select</option>
                                    @foreach ($colors as $list)
                                    <option value="{{$list->id}}">{{$list->color}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="qty">Qty</label>
                                <input id="qty" name="qty[]" type="text" class="form-control cc-number identified visa" value="" >
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="control-label mb-1">Product Image</label>
                                    <input id="" name="attr_image[]" type="file" class="form-control cc-number identified visa" value="" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <span class="btn btn-success" id="add_more"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add</span>
                            </div>
                        </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        var loop_count = 1;
        $("#add_more").click(function(){
            loop_count++;
            var html = '<div class="mt-3" id="product_attr_'+loop_count+'">';
            html += '<div class="row">';
            html += '<div class="col-lg-3"><label for="sku">SKU</label><input id="sku" name="sku[]" type="text" class="form-control cc-number identified visa" value="" ></div>';
            html += '<div class="col-lg-3"><label for="mrp">MRP</label><input id="mrp" name="mrp[]" type="text" class="form-control cc-number identified visa" value="" ></div>';
            html += '<div class="col-lg-3"><label for="price">Price</label><input id="price" name="price[]" type="text" class="form-control cc-number identified visa" value="" ></div>';
            html += '<div class="col-lg-3"><label for="size">Size</label><select name="size_id[]" id="" aria-required="true" aria-invalid="false" class="form-control"><option value="">Select</option>@foreach ($sizes as $list)<option value="{{$list->id}}">{{$list->size}}</option>@endforeach</select></div>';
            html += '<div class="col-lg-3"><label for="color">Color</label><select name="color_id[]" id="color" aria-required="true" aria-invalid="false" class="form-control"><option value="">Select</option>@foreach ($colors as $list)<option value="{{$list->id}}">{{$list->color}}</option>@endforeach</select></div>';
            html += '<div class="col-lg-3"><label for="qty">Qty</label><input id="qty" name="qty[]" type="text" class="form-control cc-number identified visa" value="" ></div>';
            html += '<div class="col-lg-6"><div class="form-group"><label for="" class="control-label mb-1">Product Image</label><input id="" name="attr_image[]" type="file" class="form-control cc-number identified visa" value="" ></div></div>';
            html += '<div><div class="col-lg-3"><span class="btn btn-danger" onclick="remove_more('+loop_count+')"><i class="fa fa-minus"></i>&nbsp;&nbsp;Remove</span></div></div>';
            html += '</div></div>';
            $("#product_attr_box").append(html);
        });
    });
    function remove_more(loop_count){
        $('#product_attr_'+loop_count).remove();
    }
</script>
@endsection
