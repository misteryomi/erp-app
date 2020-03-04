<?php

namespace App\Http\Controllers\UtilityForms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Controllers\UtilityForms\FormClass;

class BoardRoomBookingController extends Controller
{
    private $form;
    private $formFields;

    function __construct(FormBuilder $formBuilder) 
    {
        $this->formFields = $this->formFields();
        $this->form = new FormClass($formBuilder, $this->formFields, 'boardroom-booking.store', 'boardroom-booking.create');
    }

    public function create() {
        return $this->form->showForm();
    }

    public function store(Request $request) {
        $formData =  $this->form->storeFormData();
        
        $requestData = $request->all();


        dd($requestData);
        //Store Data
    }

    /**
     * Kindly refer to http://kristijanhusak.github.io/laravel-form-builder/ for guide
     */

    private function formFields() {
        return [
            [
                'name' => 'meeting-type',
                'label' => 'TYPE OF MEETING: *',
                'type' => 'select',
                'choices' => ['Internal Stakeholders' => 'Internal Stakeholders', 'External Parties' => 'External Parties'],
                'empty_value' => ' - Select Option - ',
                'rules' => 'required'
            ],
            [
                'name' => 'department',
                'label' => 'DEPARTMENT *',
                'type' => 'text',
                'rules' => 'required'
            ],
            [
                'name' => 'date',
                'label' => 'DATE FOR BOARD ROOM USE: *',
                'type' => 'date',
                'rules' => 'required'
            ],
            [
                'name' => 'participants',
                'label' => 'NUMBER OF PARTICIPANTS: *',
                'type' => 'number',
                'rules' => 'required'
            ],
            [
                'name' => 'materials',
                'label' => 'MEETING MATERIALS REQUIRED: *',
                'type' => 'choice',
                'choices' => ['Internal Stakeholders' => 'Internal Stakeholders', 'External Parties' => 'External Parties'],
                'empty_value' => ' - Select Option - ',
                'rules' => 'required',
                'multiple' => true

            ],
            [
                'name' => 'title',
                'label' => 'TITLE / PURPOSE OF MEETING *',
                'type' => 'text'
            ],

        ];
    }

}
