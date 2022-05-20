<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CanditateController extends Controller
{
    public function index()
    {
        return view('candidate-register');
    }
    // admin dashboard
    public function admin_dashboard()
    {
        return view('dashboard');
    }

    public function manage_test()
    {
        return view('menu.manage-test');
    }

    public function manage_question()
    {
        return view('menu.manage-question');
    }

    public function manage_technology()
    {
        return view('menu.manage-technology');
    }

    public function manage_user()
    {
        return view('menu.manage-user');
    }

    // public function strore(Request $request)
    // {
    //     $request->validate([
    //         'name'=>'required|min:3|max:50',
    //         'email'=>'required|email|unique:candidates',
    //         'phone'=>'required|min:11|numeric',
    //         'address'=>'required',
    //         'skill'=>'required',
    //         'experience'=>'required',
    //     ]);

    //     $candiadate = new Candidate();
    //     $candiadate->name=$request->name;
    //     $candiadate->email=$request->email;
    //     $candiadate->mobno=$request->mobno;
    //     $candiadate->experience=$request->experience;
    //     $candiadate->note=$request->note;
    //     $candiadate->skill=$request->skill;
    //     $candiadate->otp=rand(0000,9999);

    // }
}
