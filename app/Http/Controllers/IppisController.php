<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\AppraisalImport;
use App\Imports\CreditListingImport;
use App\Imports\IppisImport;
use Illuminate\Http\Request;
use App\Models\Ippis;

class IppisController extends Controller {

    public function upload() {
        $years = Ippis::all();

        return view('ippis.upload');
    }

    public function store(Request $request) {

        $request->validate([
            'file' => 'mimes:xlsx|required'
        ]);

        //Because \Excel isn't checking for binary excel files
        if($request->file->getClientOriginalExtension() != 'xlsx') {
            return redirect()->back()->withError('Only .xlsx file extension is allowed');
        }

        // $path = $request->file('file')->store('ippis');        

        Excel::import(new IppisImport, $request->file('file'));


        return redirect()->back()->withMessage('Records imported successfully!');
    }
}