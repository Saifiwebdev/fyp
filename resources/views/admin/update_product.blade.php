@extends('admin.layout')
@section('tittle_page','Update Product')
@section('container')

<h1>Update Product</h1>
<br>
<a href="{{url('admin/product')}}">
    <button class="btn btn-primary">Back</button>
</a>
<div class="row m-t-30">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{url('/admin/product/manage_product/update')}}/{{$model->id}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Product Name</label>
                        <input id="" name="name" type="text" class="form-control cc-number identified visa" value="{{$model->name}}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Product Slug</label>
                        <input id="" name="slug" type="text" class="form-control cc-number identified visa" value="{{$model->slug}}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Product Image</label>
                        <input id="" name="image" type="file" class="form-control cc-number identified visa" value="{{$model->image}}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div class="form-group has-success">
                        <label for="category_id" class="control-label mb-1">Category</label>
                        {{-- <input id="product" name="category_id" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error"> --}}
                        <select name="category_id" id="" aria-required="true" aria-invalid="false" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($category as $list)
                            @if($model->category_id == $list->id)
                                <option selected value="{{$list->id}}">
                            @else
                                <option value="{{$list->id}}">
                            @endif
                                {{$list->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Brand Name</label>
                        <input id="" name="brand" type="text" class="form-control cc-number identified visa" value="{{$model->brand}}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Model</label>
                        <input id="" name="model" type="text" class="form-control cc-number identified visa" value="{{$model->model}}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Short Description</label>
                        <input id="" name="short_desc" type="text" class="form-control cc-number identified visa" value="{{$model->short_desc}}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Description</label>
                        <input id="" name="desc" type="tel" class="form-control cc-number identified visa" value="{{$model->desc}}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Keywords</label>
                        <input id="" name="keywords" type="text" class="form-control cc-number identified visa" value="{{$model->keywords}}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Technichal Specification</label>
                        <input id="" name="technical_specificaiton" type="text" class="form-control cc-number identified visa" value="{{$model->technical_specificaiton}}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Product Uses</label>
                        <input id="" name="uses" type="text" class="form-control cc-number identified visa" value="{{$model->uses}}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label mb-1">Product Warranty</label>
                        <input id="" name="warranty" type="text" class="form-control cc-number identified visa" value="{{$model->warranty}}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    </div>

                    {{-- Product Attributes --}}

                    @foreach ($product_attrArr as $key => $value)
                    <?php $pArr = (array)$value ?>
                    <div class="border p-2 mb-3" id="product_attr_box">
                        <h3 class="mb-3 mt-2">Product Attributes</h3>
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="sku">SKU</label>
                                <input id="sku" name="sku[]" type="text" class="form-control cc-number identified visa" value="{{ $pArr['sku'] }}" >
                            </div>
                            <div class="col-lg-3">
                                <label for="mrp">MRP</label>
                                <input id="mrp" name="mrp[]" type="text" class="form-control cc-number identified visa" value="{{ $pArr['mrp'] }}" >
                            </div>
                            <div class="col-lg-3">
                                <label for="price">Price</label>
                                <input id="price" name="price[]" type="text" class="form-control cc-number identified visa" value="{{ $pArr['price'] }}" >
                            </div>
                            <div class="col-lg-3">
                                <label for="size">Size</label>
                                <select name="size_id[]" id="" aria-required="true" aria-invalid="false" class="form-control">
                                    <option value="">Select</option>
                                    @foreach ($sizes as $list)
                                    @if($pArr['size_id'] == $list->id)
                                        <option selected value="{{$list->size}}"> {{ $list->size }} </option>
                                    @else
                                        <option value="{{$list->size}}"> {{ $list->size }} </option>
                                    @endif
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
                                    @if($pArr['color_id'] == $list->id)
                                        <option selected value="{{$list->color}}"> {{ $list->color }} </option>
                                    @else
                                        <option value="{{$list->color}}"> {{ $list->color }} </option>
                                    @endif
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
                    @endforeach
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
