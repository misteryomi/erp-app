<?php
namespace App\Exports;

use App\Models\Exceptions\Exception;
use App\Http\Resources\ExceptionExportResource;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExceptionsExport implements FromCollection, WithHeadings
{
    private $exceptions;

    function __construct($exceptions) {
        $this->exceptions = $exceptions;
    }

    public function collection()
    
    {
        return ExceptionExportResource::collection($this->exceptions);
    }

    public function headings(): array
    {
        return [
            '#',
            'Department',
            'Unit',
            'Issue Category',
            'Issue',
            'Details',
            'Created By',
            'Assignment Status',
            'Assigned To',
            'Assigned At',
            'Date Created',
            'Date Solved',
            'Turn Around Time'
        ];
    }

}