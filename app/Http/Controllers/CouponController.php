<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $result['data'] = Coupon::all();
        return view('admin.coupon', $result);
    }

    public function AddCoupon($id = '')
    {
        if ($id > 0) {
            $couponArr = Coupon::where(['id' => $id])->get();

            $couple['title'] = $couponArr['0']->title;
            $couple['code'] = $couponArr['0']->code;
            $couple['value'] = $couponArr['0']->value;
            $couple['id'] = $couponArr['0']->id;

        } else {
            $couple['title'] = '';
            $couple['code'] = '';
            $couple['value'] = '';
            $couple['id'] = 0;
        }
        return view('admin.addCoupon', $couple);
    }

    // Store Category in database
    public function manage(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'code' => 'required|unique:coupons,code,' . $request->post('id'),
            'value' => 'required'
        ]);

        if ($request->post('id') > 0) {
            $coupon = Coupon::find($request->post('id'));
        } else {
            $coupon = new Coupon();
        }

        $coupon->title = $request->post('title');
        $coupon->code = $request->post('code');
        $coupon->value = $request->post('value');
        $coupon->save();

        return redirect('admin/coupon');

    }

    // Delete Category from database

    public function delete($id)
    {
        $category = Coupon::find($id);
        $category->delete();
        return redirect('admin/coupon');
    }

    public function status($type, $id)
    {
        $coupon = Coupon::find($id);
        if ($coupon) {
            $coupon->status = $type;
            $coupon->save();
            return redirect('admin/coupon');
        } else {
            return redirect('admin/coupon')->with('error', 'coupon not found');
        }
    }
}
