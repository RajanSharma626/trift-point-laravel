<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result['data'] = Product::all();
        return view('admin.product',$result);
    }

    public function AddCategory($id = '')
    {


        if ($id > 0) {
            $categoryArr = Product::where(['id' => $id])->get();

            $category['category_name'] = $categoryArr['0']->category_name;
            $category['category_slug'] = $categoryArr['0']->category_slug;
            $category['category_id'] = $categoryArr['0']->id;

        } else {
            $category['category_name'] = '';
            $category['category_slug'] = '';
            $category['category_id'] = 0;
        }
        return view('admin.addCategory', $category);
    }

    // Store Category in database
    public function manage(Request $request)
    {

        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories,category_slug,' . $request->post('id')
        ]);

        if ($request->post('id') > 0) {
            $category = Product::find($request->post('id'));
        } else {
            $category = new Product();
        }

        $category->category_name = $request->post('category_name');
        $category->category_slug = $request->post('category_slug');
        $category->save();

        return redirect('admin/category');

    }

    // Delete Category from database

    public function delete($id)
    {
        $category = Product::find($id);
        $category->delete();
        return redirect('admin/category');
    }


    // Change category status

    public function status($type, $id)
    {
        $category = Product::find($id);
        if ($category) {
            $category->status = $type;
            $category->save();
            return redirect('admin/category');
        } else {
            return redirect('admin/category')->with('error', 'Category not found');
        }
    }

   
}
