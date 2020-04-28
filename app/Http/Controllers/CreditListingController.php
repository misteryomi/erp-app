<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\AppraisalImport;
use App\Imports\CreditListingImport;
use Illuminate\Http\Request;
use App\Models\CreditListing;

class CreditListingController extends Controller {

    public function upload() {
        $years = CreditListing::all();

        return view('credit_listing.upload');
    }

    public function store(Request $request) {

        $request->validate([
            'file' => 'mimes:xlsx|required'
        ]);

        //Because \Excel isn't checking for binary excel files
        if($request->file->getClientOriginalExtension() != 'xlsx') {
            return redirect()->back()->withError('Only .xlsx file extension is allowed');
        }

        $path = $request->file('file')->store('credit_listing');        

        // Excel::filter('chunk')->load($path)->chunk(250, function($results) {
        //     foreach($results as $row) {
        //         CreditListing::create([
        //             "pd_id" => $row['pdid'],
        //             "pd_customer" => $row['pdcustomer'],
        //             "acct_name" => $row['acctname'],
        //             "ld_acct" => $row['ldnacct'],
        //             "ld_category" => $row['ldcategory'],
        //             "ld_description" => $row['lddescription'],
        //             "employer_name" => $row['employername'],
        //             "sector_description" =>$row['sectordescription'],
        //             "value_date" => $row['value_date'],
        //             "start_date" => $row['start_date'],
        //             "maturity_date" => $row['maturity_date'],
        //             "tel_no" => $row['telno'],
        //             "disb_amt" => $row['disbamt'],
        //             "monthly_prin" => $row['monthlyprin'],
        //             "monthly_int" => $row['monthlyint'],
        //             "no_months" => $row['nomonths'],
        //             "outstanding_amount" => $row['outstandingamount'],
        //             "paid_amt" => $row['paidamt'],
        //             "no_in_arrears" => $row['noinarrears'],
        //             "prin_amt" => $row['prinamt'],
        //             "int_amt" => $row['intamt'],
        //             "pd_start_date" => $row['pdstartdate'],
        //             "pd_dpd" => $row['pddpd'],
        //             "par_principal" => $row['parprincipal'],
        //             "officer_name" => $row['officername'],
        //             "bucket" => $row['bucket'],
        //             "classification" => $row['classification'],
        //             "accountofficer_code" => $row['accountofficercode'],
        //             "report_date" => $row['reportdate'],
        //             "interest_rate" => $row['interestrate'],
        //         ]);    

        //     }    
        // });

        Excel::import(new CreditListingImport, $path);


        return redirect()->back()->withMessage('Records imported successfully!');
    }
}