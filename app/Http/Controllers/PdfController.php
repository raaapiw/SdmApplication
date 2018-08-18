<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use PDF;

class PdfController extends Controller
{
    public function index() {
        $employees = Employee::all();

         return view('pages.pdf.list', compact('employees'));
    }

    public function download($employee_id) {
        $employee = Employee::find($employee_id);
        $pdf = PDF::loadHTML('<h1>Test</h1>');

        return $pdf->stream();
    }
}
