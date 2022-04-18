<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        $fetch_data = compact('data');
        return view('admin/product')->with($fetch_data);
    }

    public function manage_product()
    {
        $result['category']=DB::table('categories')->where(['status'=> 0])->get();
        $result['sizes']=DB::table('sizes')->where(['status'=> 0])->get();
        // $result['colors']=DB::table('colors')->where(['status'=> 0])->get();
        return view('admin/manage_product', $result);
    }

    public function manage_product_process(Request $request){
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'slug' => 'required|unique:products',
            'brand' => 'required',
            'model' => 'required',
            'short_desc' => 'required',
            'desc' => 'required',
            'keywords' => 'required',
            'technical_specificaiton' => 'required',
            'uses' => 'required',
            'warranty' => 'required',
        ]);

        $model = new Product();
        $model->category_id = $request->post('category_id');
        $model->name = $request->post('name');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media', $image_name);
            $model->image = $image_name;
        }

        $model->slug = $request->post('slug');
        $model->brand = $request->post('brand');
        $model->model = $request->post('model');
        $model->short_desc = $request->post('short_desc');
        $model->desc = $request->post('desc');
        $model->keywords = $request->post('keywords');
        $model->technical_specificaiton = $request->post('technical_specificaiton');
        $model->uses = $request->post('uses');
        $model->warranty = $request->post('warranty');
        $model->status = 0;
        $model->save();
        $request->session()->flash('message','Product Inserted Successfully!');
        return redirect('admin/product');
    }

    public function delete(Request $request,$id){
        $model = Product::find($id);
        $model->delete();
        $request->session()->flash('message','Product Deleted Successfully!');
        return redirect('admin/product');
    }

    public function status(Request $request,$status,$id){
        $model = Product::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('message','Action  Successfully!');
        return redirect('admin/product');
    }

    public function edit($id){
        $model = Product::find($id);
        $result['category']=DB::table('categories')->where(['status'=> 0])->get();
        $data = compact('model');
        return view('admin.update_product',$result)->with($data);
    }

    public function update(Request $request, $id){
        $model = Product::find($id);
        // $model->category_id = $request->post('category_id');
        $model->name = $request->post('name');

            if($request->hasFile('image')){
                $image = $request->file('image');
                $ext = $image->extension();
                $image_name = time() . '.' . $ext;
                $image->storeAs('/public/media', $image_name);
                $model->image = $image_name;
            }

        $model->slug = $request->post('slug');
        $model->brand = $request->post('brand');
        $model->model = $request->post('model');
        $model->short_desc = $request->post('short_desc');
        $model->desc = $request->post('desc');
        $model->keywords = $request->post('keywords');
        $model->technical_specificaiton = $request->post('technical_specificaiton');
        $model->uses = $request->post('uses');
        $model->warranty = $request->post('warranty');
        $model->status = 0;
        $model->save();
        $request->session()->flash('message','Product Updated Successfully!');
        return redirect('admin/product');
    }

}
