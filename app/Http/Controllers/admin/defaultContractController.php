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

    public function form($id)
    {
        $defaultContract = DefaultContract::find($id);

        return view('pages.admin.tools.form', compact('defaultContract'));
    }

    public function store(Request $request)
    {
        $data = [
            'jabatan' => $request->jabatan,
            'degree' => $request->degree,
            'gapok' => $request->gapok,
            'tunkin' => $request->tunkin,
            'tunjab' => $request->tunjab,
            'tunpresjab' => $request->tunpresjab

        ];
        $defaultContract = DefaultContract::create($data);

        return redirect()->url()->previous();
    }

    public function update(Request $request, $id)
    {
        $defaultContract = DefaultContract::find($id);
        $data = [
            'jabatan' => $request->jabatan,
            'degree' => $request->degree,
            'gapok' => $request->gapok,
            'tunkin' => $request->tunkin,
            'tunjab' => $request->tunjab,
            'tunpresjab' => $request->tunpresjab

        ];
        $defaultContract->fill($data)->save();;

        return redirect()->url()->previous();
    }
}
