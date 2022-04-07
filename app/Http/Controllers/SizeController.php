<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{

    public function index()
    {
        $data = Size::all();
        $fetch_data = compact('data');
        return view('admin/size')->with($fetch_data);
    }

    public function manage_size()
    {
        return view('admin/manage_size');
    }

    public function manage_size_process(Request $request){
        $request->validate([
            'size' => 'required',
        ]);
        $model = new Size();
        $model->size = $request->post('size');
        $model->save();
        $request->session()->flash('message','Size Inserted Successfully!');
        return redirect('admin/size');
    }

    public function delete(Request $request,$id){
        $model = Size::find($id);
        $model->delete();
        $request->session()->flash('message','Size Deleted Successfully!');
        return redirect('admin/size');
    }

    public function edit($id){
        $model = Size::find($id);
        $data = compact('model');
        return view('admin.update_size')->with($data);
    }

    public function update(Request $request, $id){
        $model = Size::find($id);
        $model->size = $request->post('size');
        $model->save();
        $request->session()->flash('message','Size Updated Successfully!');
        return redirect('admin/size');
    }

    public function status(Request $request,$status,$id){
        $model = Size::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('message','Status Updated Successfully!');
        return redirect('admin/size');
    }
}
