<?php

namespace App\Http\Controllers;

use App\Models\loan_application;
use Illuminate\Http\Request;

class LoanApplicationController extends Controller
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
        $data = new loan_application();
        $data->id= $request->id;
        $data->name= $request->name;
        $data->employeeID= $request->employeeID;
        $data->phone= $request->phone;
        $data->email= $request->email;
        $data->position= $request->position;
        $data->department= $request->department;
        $data->loanAmount= $request->loanAmount;
        $data->repayment= $request->repayment;
        $data->date= $request->date;
        $data->repayment_amount_per_month= $request->repayment_amount_per_month;
        $data->salary= $request->salary;
        $data->status= $request->status;
        $data->save();
        return redirect()->route('application');
    }
    public function store1_for_user(Request $request)
    {
        $data = new loan_application();
        $data->id= $request->id;
        $data->name= $request->name;
        $data->employeeID= $request->employeeID;
        $data->phone= $request->phone;
        $data->email= $request->email;
        $data->position= $request->position;
        $data->department= $request->department;
        $data->loanAmount= $request->loanAmount;
        $data->repayment= $request->repayment;
        $data->date= $request->date;
        $data->repayment_amount_per_month= $request->repayment_amount_per_month;
        $data->salary= $request->salary;
        $data->status= $request->status;
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['application']=loan_application::get();
        return view('loan_application.index',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // return view('employees.edit_form');
        $data['alldata']=loan_application::find($id);
        return view('loan_application.edit_form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request1)
    {
        $id =$request1->id;
        $data=loan_application::find($id);
        $data->name= $request1->name;
        $data->employeeID= $request1->employeeID;
        $data->phone= $request1->phone;
        $data->email= $request1->email;
        $data->position= $request1->position;
        $data->department= $request1->department;
        $data->loanAmount= $request1->loanAmount;
        $data->repayment= $request1->repayment;
        $data->date= $request1->date;
        $data->repayment_amount_per_month= $request1->repayment_amount_per_month;
        $data->salary= $request1->salary;
        $data->status= $request1->status;
        $data->save();
        return redirect()->route('application');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data =loan_application::find($id);
        $data->delete();
        return redirect()->route('application');
    }
    public function form(Request $request)
    {
        return view('loan_application.form');
        
    }
}
