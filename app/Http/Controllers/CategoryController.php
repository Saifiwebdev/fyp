<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::all();
        $fetch_data = compact('data');
        return view('admin/category')->with($fetch_data);
    }

    public function manage_category()
    {
        return view('admin/manage_category');
    }

    public function manage_category_process(Request $request){
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories',
        ]);
        $model = new Category();
        $model->category_name = $request->post('category_name');
        $model->category_slug = $request->post('category_slug');
        $model->status = 0;
        $model->save();
        $request->session()->flash('message','Category Inserted Successfully!');
        return redirect('admin/category');
    }

    public function delete(Request $request,$id){
        $model = Category::find($id);
        $model->delete();
        $request->session()->flash('message','Category Deleted Successfully!');
        return redirect('admin/category');
    }

    public function status(Request $request,$status,$id){
        $model = Category::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('message','Status Updated Successfully!');
        return redirect('admin/category');
    }

    public function edit($id){
        $model = Category::find($id);
        $data = compact('model');
        return view('admin.update_category')->with($data);
    }

    public function update(Request $request, $id){
        $model = Category::find($id);
        $model->category_name = $request->post('category_name');
        $model->category_slug = $request->post('category_slug');
        $model->save();
        $request->session()->flash('message','Category Updated Successfully!');
        return redirect('admin/category');
    }
}
