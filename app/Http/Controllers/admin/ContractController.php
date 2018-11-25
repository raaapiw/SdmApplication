<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Input as Input;
use App\Employee;
use App\Contract;
use PDF;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addNew()
    {
        //
        $employees = Employee::doesntHave('contracts')->get();

        return view ('pages.admin.contract.addnew', compact('employees'));
    }

    public function addRenew()
    {
        $employees = Employee::has('contracts')->get();

        return view ('pages.admin.contract.addRenew', compact('employees'));
    }

    public function list()
    {
        $contract = Contract::all();
        // dd($contract);

        return view ('pages.admin.contract.list', compact('contract'));
    }

    public function form($id)
    {
        $employee = Employee::find($id);
        // dd($employee);

        return view ('pages.admin.contract.form', compact('employee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        foreach($request->facility as $index => $row){
            
            $data = [
                'name' => $request->contract,
                'facility' => $request->facility[$index],
                'gatot' => $request->gatot
            ];

            $contract = Contract::create($data);

            return redirect()->url()->previous();
        }
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contract = Contract::find($id);
        $employee = Employee::where('id','=', $contract->employee_id)->first();

        return view('pages.admin.contract.form', compact('contract','employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $contract = Contract::find($id);
        foreach($request->facility as $index => $row){
            
            $data = [
                'name' => $request->contract,
                'facility' => $request->facility[$index],
                'gatot' => $request->gatot
            ];

            $contract = Contract::create($data);

            return redirect()->url()->previous();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function print($id)
    {
        // Fetch selected contract from database
        $data = Contract::find($id);
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('pages.pdf.contract1', $data);
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->stream('contract1.pdf');
    }
}
