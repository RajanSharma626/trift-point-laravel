<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $result['data'] = Size::all();
        return view('admin.size', $result);
    }

    public function addSize($id = '')
    {


        if ($id > 0) {
            $sizeArr = Size::where(['id' => $id])->get();

            $size['size'] = $sizeArr['0']->size;
            $size['id'] = $sizeArr['0']->id;

        } else {
            $size['size'] = '';
            $size['id'] = 0;
        }
        return view('admin.addSize', $size);
    }

    // Store size in database
    public function manage(Request $request)
    {

        $request->validate([
            'size' => 'required|unique:sizes,size,' . $request->post('id')
        ]);

        if ($request->post('id') > 0) {
            $size = Size::find($request->post('id'));
        } else {
            $size = new Size();
        }

        $size->size = $request->post('size');
        $size->save();

        return redirect('admin/size');

    }

    // Delete Category from database

    public function delete($id)
    {
        $size = Size::find($id);
        $size->delete();
        return redirect('admin/size');
    }


    // Change size status

    public function status($type, $id)
    {
        $size = Size::find($id);
        if ($size) {
            $size->status = $type;
            $size->save();
            return redirect('admin/size');
        } else {
            return redirect('admin/size')->with('error', 'Category not found');
        }
    }
}
