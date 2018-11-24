<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Input as Input;
use App\Employee;
use App\Contract;
use App\Training;

class TrainingController extends Controller
{
    //

    public function add()
    {
        $employees = Employee::all();
        // dd($employees);

        return view ('pages.admin.training.add', compact('employees'));
    }

    public function form($id)
    {
        $employee = Employee::find($id);
        $training = Training::where('employee_id','=',$id)->first();

        return view ('pages.admin.training.form', compact('training','employee'));
    }

    public function edit($id)
    {
        $training = Training::find($id);
        $employee = Employee::where('id','=',$training->employee_id)->first();

        return view ('pages.admin.training.form', compact('training','employee'));
    }

    public function list()
    {
        $trainings = Training::all();

        return view ('pages.admin.training.list', compact ('trainings'));
    }

    public function store(Request $request)
    {
        $data = [
        'employee_id'   => $request->employee_id,
        'theme'         => $request->theme,
        'penyelenggara' => $request->penyelenggara,
        'jadwal'        => $request->jadwal,
        'no_sertifikat' => $request->no_sertifikat,
        'biaya'         => $request->biaya
        ];

        $training = Training::create($data);

        return redirect()->route('admin.training.list');
    }

    public function update(Request $request, $id)
    {
        $training = Training::find($id);
        $data = [
            'employee_id'   => $request->employee_id,
            'theme'         => $request->theme,
            'penyelenggara' => $request->penyelenggara,
            'jadwal'        => $request->jadwal,
            'no_sertifikat' => $request->no_sertifikat,
            'biaya'         => $request->biaya
            ];
    
        $training->fill($data)->save();

        return redirect()->route('admin.training.list');
    }
}
