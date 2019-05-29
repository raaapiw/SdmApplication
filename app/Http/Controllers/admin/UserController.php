<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Input as Input;
use App\Employee;
use App\Contract;
use App\Training;

class UserController extends Controller
{
    //
    public function dashboard(){
        
        return view('pages.admin.dashboard');
    }

    public function dataMaster(){
        $employee = Employee::all();

        return view('pages.admin.master', compact('employee'));
    }

    public function detail($id){
        $employee = Employee::find($id)->get();

        return view('pages.admin.detail', compact('employee'));
    }
}
