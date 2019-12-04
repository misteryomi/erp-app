<?php
namespace App\Exports;

use App\Ticket;
use App\Http\Resources\TicketExportResource;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TicketsExport implements FromCollection, WithHeadings
{
    private $tickets;

    function __construct($tickets) {
        $this->tickets = $tickets;
    }

    public function collection()
    {
        return TicketExportResource::collection($this->tickets);
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