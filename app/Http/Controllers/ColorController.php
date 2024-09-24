<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $result['data'] = Color::all();
        return view('admin.color', $result);
    }

    public function addColor($id = '')
    {


        if ($id > 0) {
            $colorArr = Color::where(['id' => $id])->get();

            $color['color'] = $colorArr['0']->color;
            $color['id'] = $colorArr['0']->id;

        } else {
            $color['color'] = '';
            $color['id'] = 0;
        }
        return view('admin.addColor', $color);
    }

    // Store size in database
    public function manage(Request $request)
    {

        $request->validate([
            'color' => 'required|unique:sizes,size,' . $request->post('id')
        ]);

        if ($request->post('id') > 0) {
            $color = Color::find($request->post('id'));
        } else {
            $color = new Color();
        }

        $color->color = $request->post('color');
        $color->save();

        return redirect('admin/color');

    }

    // Delete Category from database

    public function delete($id)
    {
        $color = Color::find($id);
        $color->delete();
        return redirect('admin/color');
    }


    // Change category status

    public function status($type, $id)
    {
        $color = Color::find($id);
        if ($color) {
            $color->status = $type;
            $color->save();
            return redirect('admin/color');
        } else {
            return redirect('admin/color')->with('error', 'Category not found');
        }
    }
}
