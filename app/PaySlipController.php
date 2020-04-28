<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\AppraisalImport;
use App\Imports\CreditListingImport;
use App\Imports\PaySlipImport;
use Illuminate\Http\Request;
use App\Models\CreditListing;
use App\PaySlip;
use Illuminate\Support\Facades\Storage;

class PaySlipController extends Controller {

    public function upload() {

        return view('pay_slip.upload');
    }

    public function store(Request $request) {

        $request->validate([
            'file' => 'mimes:xlsx,xls|required'
        ]);

        // //Because \Excel isn't checking for binary excel files
        // if($request->file->getClientOriginalExtension() != 'xlsx') {
        //     return redirect()->back()->withError('Only .xlsx file extension is allowed');
        // }

        $path = $request->file('file')->store('credit_listing');        

        // $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($request->file);
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xls');
        $reader->setLoadAllSheets();

        $spreadsheet = $reader->load($request->file);

        // dd($spreadsheet->getSheetCount() . ' worksheet' . (($spreadsheet->getSheetCount() == 1) ? '' : 's') . ' loaded');
        $loadedSheetNames = $spreadsheet->getSheetNames();
        foreach ($loadedSheetNames as $sheetIndex => $loadedSheetName) {
            // $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            $spreadsheet->setActiveSheetIndex($sheetIndex); //$sheetIndex

            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

            


            $data = [
                'employee_name' => $this->findData($sheetData, 4, 'Employee Name'),
                'ippis_number' => $this->findData($sheetData, 6, 'IPPIS Number'), 
                'ministry' => $this->findData($sheetData, 8, 'Ministry'), 
                'division' =>  $this->findData($sheetData, 9, 'Division'), 
                'designation' => $this->findData($sheetData, 10, 'Designation'),
                'location' => $this->findData($sheetData, 11, 'Location'), 
                'date_of_birth' => $this->findData($sheetData, 13, 'Date of Birth'), 
                'date_of_appointment' => $this->findData($sheetData, 12, 'Date of Appointment'),
                'trade_union' => $this->findData($sheetData, 14, 'Trade Union'), 
                'bank_name' => $this->findData($sheetData, 16, 'Bank Name') ? $this->findData($sheetData, 16, 'Bank Name') : $this->findData($sheetData, 17, 'Bank Name'), 
                'bank_branch' =>$this->findData($sheetData, 17, 'Bank Branch') ? $this->findData($sheetData, 17, 'Bank Branch') : $this->findData($sheetData, 18, 'Bank Branch'),
                'account_number' => $this->findData($sheetData, 18, 'Account Number') ? $this->findData($sheetData, 18, 'Account Number') : $this->findData($sheetData, 19, 'Account Number'),
                'grade' => $this->findData($sheetData, 4, 'Grade'),
                'step' => $this->findData($sheetData, 5, 'Step'),
                'gender' => $this->findData($sheetData, 7, 'Gender'),
                'total_gross_earning' =>  $this->findData($sheetData, 31, 'Total Gross Earning') ? $this->findData($sheetData, 31, 'Total Gross Earning') : $this->findData($sheetData, 29, 'Total Gross Earning'),
                'total_gross_deductions' =>  $this->findData($sheetData, 32, 'Total Gross Deductions') ? $this->findData($sheetData, 32, 'Total Gross Deductions') : $this->findData($sheetData, 30, 'Total Gross Deductions'), 
                'total_net_earning' =>  $this->findData($sheetData, 33, 'Total Net Earning') ? $this->findData($sheetData, 33, 'Total Net Earning') : $this->findData($sheetData, 31, 'Total Net Earning'),
                'override' => $request->override ? true : false
            ];

            PaySlip::firstOrCreate(
                [
                    'ippis_number' => $data['ippis_number'],
                    'year' => $request->year,
                    'month' => $request->month    
                ], $data);


            // $data = [
            //     'employee_name' =>  $this->extract($sheetData, 4, 'B', 'C') ?  $this->extract($sheetData, 4, 'B', 'C') : $this->extract($sheetData, 4, 'C', 'B'),
            //     'ippis_number' =>  $this->extract($sheetData, 5, 'B', 'C') ? $this->extract($sheetData, 6, 'B', 'C') : $this->extract($sheetData, 6, 'C', 'B'), 
            //     'ministry' => $this->extract($sheetData, 8, 'B', 'G') ?  $this->extract($sheetData, 8, 'B', 'G') :  $this->extract($sheetData, 8, 'G', 'B'), 
            //     'division' => $this->extract($sheetData, 9, 'B', 'G') ? $this->extract($sheetData, 9, 'B', 'G') : $this->extract($sheetData, 9, 'C', 'B'), 
            //     'designation' => $this->extract($sheetData, 10, 'B', 'G') ? $this->extract($sheetData, 10, 'B', 'G') : $this->extract($sheetData, 10, 'C', 'B'),
            //     'location' =>  $this->extract($sheetData, 11, 'B', 'G') ?  $this->extract($sheetData, 11, 'B', 'G') : $this->extract($sheetData, 11, 'C', 'B'), 
            //     'date_of_birth' => $this->extract($sheetData, 13, 'B', 'G') ? $this->extract($sheetData, 13, 'B', 'G') : $this->extract($sheetData, 13, 'C', 'B'), 
            //     'date_of_appointment' => $this->extract($sheetData, 12, 'B', 'C') ? $this->extract($sheetData, 12, 'B', 'C') : $this->extract($sheetData, 4, 'G', 'F'),
            //     'trade_union' => $this->extract($sheetData, 14, 'B', 'G') ? $this->extract($sheetData, 14, 'B', 'G') : $this->extract($sheetData, 14, 'C', 'B'), 
            //     'bank_name' => $this->extract($sheetData, 17, 'B', 'G') ? $this->extract($sheetData, 17, 'B', 'G') : $this->extract($sheetData, 17, 'C', 'B'), 
            //     'bank_branch' => $this->extract($sheetData, 18, 'B', 'G') ? $this->extract($sheetData, 18, 'B', 'G') : $this->extract($sheetData,18, 'C', 'B'),
            //     'account_number' => $this->extract($sheetData, 19, 'B', 'G') ? $this->extract($sheetData, 19, 'B', 'G'): $this->extract($sheetData, 19, 'C', 'B'),
            //     'grade' => $this->extract($sheetData, 4, 'D', 'E') ? $this->extract($sheetData, 4, 'D', 'E') : $this->extract($sheetData, 4, 'G', 'F'),
            //     'step' => $this->extract($sheetData, 5, 'D', 'E') ? $this->extract($sheetData, 5, 'D', 'E') : $this->extract($sheetData, 5, 'G', 'F'),
            //     'gender' => $this->extract($sheetData, 7, 'D', 'E') ? $this->extract($sheetData, 7, 'D', 'E') : $this->extract($sheetData, 7, 'G', 'F'),
            //     'total_gross_earning' =>  $this->extract($sheetData, 31, 'D', 'E') ?  $this->extract($sheetData, 31, 'D', 'E') :  $this->extract($sheetData, 29, 'H', 'F'),
            //     'total_gross_deductions' =>  $this->extract($sheetData, 32, 'D', 'E') ?  $this->extract($sheetData, 32, 'D', 'E') :  $this->extract($sheetData, 31, 'H', 'F'), 
            //     'total_net_earning' =>  $this->extract($sheetData, 33, 'D', 'E') ?  $this->extract($sheetData, 33, 'D', 'E') :  $this->extract($sheetData, 32, 'H', 'F'),
            // ];


            // dd($sheetData);
            

        }




        // $import = new PaySlipImport;
        // Excel::import($import, $path);
        // dd($import->getSheetNames());

        // foreach ($import->getSheetNames() as $index => $sheetName) {
        //     $data[$index] = new ExcelSheetImport();
        // }

      return redirect()->back()->withMessage('Records imported successfully!');
    }


    private function findData($data, $index, $text) {

        try {
            $value = null;
            $keys = array_keys($data[$index]); //Retrieve an array of keys for each keys in the original array
    
            $textIndex = $this->searchArrayText($text, $data[$index]); //Search for the text in this array
            //array_search
    
    
            /**
             * if the $textIndex exists, loop through the values of all $keys array 
             * and find the next available value for the index.
             */
            if($textIndex) { 
                $count = 1;
                while($count < count($keys)) {
                    
                    if($nextIndex = $keys[array_search($textIndex, $keys) + $count]) {
                            //Get the index of the each next field. Return the $keys index (the cell column number)
    
                            $value = $data[$index][$nextIndex];  //Retrieve that index from the main $data[$index] array
        
                            if($value !== null) {
                                return $value;         //If value is not null, return value
                            }
        
                    } 
        
                    $count++;
        
                }    
            }
       
            return null;

        } catch(\Exception $e) {

            return null;
        }



    }


    private function searchArrayText($text, $array) {

        foreach($array as $key => $value) {

            $similar = similar_text($text, $value);

            if($similar > 3) {
               return $key;
            }
        }
    }

    private function extract($data, $index, $key1, $key2) {

        if(!array_key_exists($index, $data)) return null;

        $data = $data[$index];

        if(array_key_exists($key1, $data) && $data[$key1] !== null) {
            $value = $data[$key1];    
        } elseif(array_key_exists($key2, $data) && $data[$key2] !== null) {
            $value = $data[$key2];          
        } else {
            $value =  null;
        }

        return $value;
        // return array_key_exists($key1, $data) ? $data[$key1] : array_key_exists($key2, $data) ? $data[$key2] : null;
    }
}