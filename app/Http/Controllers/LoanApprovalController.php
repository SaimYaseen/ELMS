<?php

namespace App\Http\Controllers;

use App\Models\Loan_approval;
use Illuminate\Http\Request;

class LoanApprovalController extends Controller
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
        $data = new Loan_approval();
        $data->id= $request->id;
        $data->application_id= $request->application_id;
        $data->approver= $request->approver;
        $data->status= $request->status;
        $data->save();
        return redirect()->route('application1');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['Loan_approval']=Loan_approval::get();
        return view('Loan_approval.index',$data);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // return view('employees.edit_form');
        $data['alldata']=Loan_approval::find($id);
        return view('Loan_approval.edit_form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id =$request->id;
        $data=Loan_approval::find($id);
        $data->application_id= $request->application_id;
        $data->approver= $request->approver;
        $data->status= $request->status;
        $data->save();
        return redirect()->route('application1');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data =Loan_approval::find($id);
        $data->delete();
        return redirect()->route('application1');
    }
    public function form(Request $request)
    {
        return view('Loan_approval.form');
        
    }
}
