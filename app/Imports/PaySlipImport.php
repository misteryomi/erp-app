<?php

namespace App\Imports;

use App\Models\CreditListing;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class PaySlipImport implements WithMultipleSheets
{

    /**
     * @param array $row
     *
     * @return User|null
     */

     public function sheets(): array
     {
         return [
              0 => new FirstSheetImport(),
              1 => new FirstSheetImport()
         ];
     }
     
    // public function model(array $row)
    // {

    //     dd($row);
    //     // CreditListing::create([
    //     //     'user_id' => auth()->user()->id,
    //     //     "pd_id" => $row['pdid'],
    //     //     "pd_customer" => $row['pdcustomer'],
    //     //     "acct_name" => $row['acctname'],
    //     //     "ld_acct" => $row['ldacct'],
    //     //     "ld_category" => $row['ldcategory'],
    //     //     "ld_description" => $row['lddescription'],
    //     //     "employer_name" => $row['employername'],
    //     //     "sector_description" =>$row['sectordescription'],
    //     //     "value_date" => $row['value_date'],
    //     //     "start_date" => $row['start_date'],
    //     //     "maturity_date" => $row['maturitydate'],
    //     //     "tel_no" => $row['telno'],
    //     //     "disb_amt" => $row['disbamt'],
    //     //     "monthly_prin" => $row['monthlyprin'],
    //     //     "monthly_int" => $row['monthlyint'],
    //     //     "no_months" => $row['nomonths'],
    //     //     "outstanding_amount" => $row['outstandingamount'],
    //     //     "paid_amt" => $row['paidamt'],
    //     //     "no_in_arrears" => $row['noinarrears'],
    //     //     "prin_amt" => $row['prinamt'],
    //     //     "int_amt" => $row['intamt'],
    //     //     "pd_start_date" => $row['pdstartdate'],
    //     //     "pd_dpd" => $row['pddpd'],
    //     //     "par_principal" => $row['parprincipal'],
    //     //     "officer_name" => $row['officername'],
    //     //     "bucket" => $row['bucket'],
    //     //     "classification" => $row['classification'],
    //     //     "accountofficer_code" => $row['accountofficer_code'],
    //     //     "report_date" => $row['reportdate'],
    //     //     "interest_rate" => $row['interestrate'],
    //     // ]);

        

    // }


    // public function batchSize(): int
    // {
    //     return 500;
    // }

}