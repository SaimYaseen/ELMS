<?php

namespace App\Http\Controllers;

use App\Models\employees;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeesController extends Controller
{
    public function checkUserType(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
        if(Auth::user()->userType==='ADM'){
            return view('form');
        }
        if(Auth::user()->userType==='USR'){
            return view('form');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function form(Request $request)
    {
        return view('employees.form');
        // $data = new User();
        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->password = $request->password;
        // $data->save();
        // return redirect()->route('tableview');
    }
    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect()->route('employees');
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['employees']=User::get();
        return view('employees.index',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // return view('employees.edit_form');
        $data['alldata']=User::find($id);
        return view('employees.edit_form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request1)
    {
        $id =$request1->id;
        $data=User::find($id);
        $data->name = $request1->name;
        $data->email = $request1->email;
        $data->password = $request1->password;
        $data->save();
        return redirect()->route('employees');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data =User::find($id);
        $data->delete();
        return redirect()->route('employees');
    }
}

