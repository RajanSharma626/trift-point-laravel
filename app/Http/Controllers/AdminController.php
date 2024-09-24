<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (Session::has('ADMIN_LOGIN') || Session::get('ADMIN_LOGIN')) {
            return redirect('/admin/dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->post('email');
        $password = $request->post('password');

        $result = Admin::where(['email' => $email, 'password' => $password])->first();

        if ($result) {
            // Set session variables
            $request->session()->put('ADMIN_LOGIN', true);
            $request->session()->put('ADMIN_ID', $result->id);

            // Redirect to dashboard
            return redirect('admin/dashboard');
        } else {
            // Failed login, flash error message and redirect back
            $request->session()->flash('error', 'Wrong Email & Password. Please Try Again');
            return redirect()->back();
        }
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
