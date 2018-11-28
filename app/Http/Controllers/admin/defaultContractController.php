<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Input as Input;
use App\DefaultContract;

class defaultContractController extends Controller
{
    //
    public function list()
    {
        $defaultContract = DefaultContract::all();
        // dd($defaultContract);

        return view('pages.admin.tools.list', compact('defaultContract'));
    }
}
