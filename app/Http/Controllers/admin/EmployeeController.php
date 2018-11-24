<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Input as Input;
use App\Employee;
use App\Contract;
use App\Training;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function detail($id)
     {
        $employee = Employee::find($id);
        $contract = Contract::where('employee_id','=',$id)->get();
        $training = Training::where('employee_id','=',$id)->get();
        // dd($employee->contracts);

        return view('pages.admin.employee.detail', compact('employee','contract','training'));
     }

     public function list()
     {
         $employees = Employee::all();

         return view('pages.admin.employee.list', compact('employees'));
     }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('pages.admin.employee.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'nik' => $request->nik,
            'graduated_from' => $request->graduated_from,
            'degree' => $request->degree
            
        ];
        $employee = Employee::create($data);

        return redirect()->route('admin.employee.list');
        
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
        $employee = Employee::find($id);
        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'nik' => $request->nik,
            'graduated_from' => $request->graduated_from,
            'degree' => $request->degree
            
        ];
        $employee->fill($data)->save();

        return redirect()->route('admin.employee.list');
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
        
        $employee = Employee::find($id)->delete();
        
        return redirect()->route('admin.employee.list');
    }
}
