<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
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
    public function store(Request $request)
    {
        // return $request;
        $data = new contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        // return redirect()->back();
        return view('thankYou');
        
    }
    public function store_for_admin(Request $request)
    {
        // return $request;
        $data = new contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('application3');
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['application']=contact::get();
        return view('contact.index',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // return view('employees.edit_form');
        $data['alldata']=contact::find($id);
        return view('contact.edit_form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id =$request->id;
        $data=contact::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('application3');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data =contact::find($id);
        $data->delete();
        return redirect()->route('application3');
        
    }
    public function form(Request $request)
    {
        return view('contact.form');
        
    }
}
