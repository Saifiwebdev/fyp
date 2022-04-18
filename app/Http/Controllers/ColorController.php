<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $data = Color::all();
        $fetch_data = compact('data');
        return view('admin/color')->with($fetch_data);
    }

    public function manage_color()
    {
        return view('admin/manage_color');
    }

    public function manage_color_process(Request $request){
        $request->validate([
            'color' => 'required',
        ]);
        $model = new Color();
        $model->color = $request->post('color');
        $model->save();
        $request->session()->flash('message','Color Inserted Successfully!');
        return redirect('admin/color');
    }

    public function delete(Request $request,$id){
        $model = Color::find($id);
        $model->delete();
        $request->session()->flash('message','Color Deleted Successfully!');
        return redirect('admin/color');
    }

    public function edit($id){
        $model = Color::find($id);
        $data = compact('model');
        return view('admin.update_color')->with($data);
    }

    public function update(Request $request, $id){
        $model = Color::find($id);
        $model->color = $request->post('color');
        $model->save();
        $request->session()->flash('message','Color Updated Successfully!');
        return redirect('admin/color');
    }

    public function status(Request $request,$status,$id){
        $model = Color::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('message','Status Updated Successfully!');
        return redirect('admin/color');
    }
}
