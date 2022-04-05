<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $data = Coupon::all();
        $fetch_data = compact('data');
        return view('admin/coupon')->with($fetch_data);
    }

    public function manage_coupon()
    {
        return view('admin/manage_coupon');
    }

    public function manage_coupon_process(Request $request){
        $request->validate([
            'title' => 'required',
            'code' => 'required|unique:coupons',
            'value' => 'required',
        ]);
        $model = new Coupon();
        $model->title = $request->post('title');
        $model->code = $request->post('code');
        $model->value = $request->post('value');
        $model->save();
        $request->session()->flash('message','Coupon Inserted Successfully!');
        return redirect('admin/coupon');
    }

    public function delete(Request $request,$id){
        $model = Coupon::find($id);
        $model->delete();
        $request->session()->flash('message','Coupon Deleted Successfully!');
        return redirect('admin/coupon');
    }

    public function edit($id){
        $model = Coupon::find($id);
        $data = compact('model');
        return view('admin.update_coupon')->with($data);
    }

    public function update(Request $request, $id){
        $model = Coupon::find($id);
        $model->title = $request->post('title');
        $model->code = $request->post('code');
        $model->value = $request->post('value');
        $model->save();
        $request->session()->flash('message','Coupon Updated Successfully!');
        return redirect('admin/coupon');
    }
}
