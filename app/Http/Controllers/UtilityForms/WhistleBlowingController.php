<?php

namespace App\Http\Controllers\UtilityForms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Controllers\UtilityForms\FormClass;

class WhistleBlowingController extends Controller
{
    private $form;
    private $formFields;

    function __construct(FormBuilder $formBuilder) 
    {
        $this->formFields = $this->formFields();
        $this->form = new FormClass($formBuilder, $this->formFields, 'whistle-blowing.store', 'whistle-blowing.create');
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

    private function formFields() {
        return [
            [
                'name' => 'title',
                'type' => 'text',
                'rules' => 'required|min:5'
            ],
            [
                'name' => 'conduct',
                'type' => 'textarea',
                'rules' => 'required|min:5'
            ],
            [
                'name' => 'remarks',
                'type' => 'textarea'
            ],

        ];
    }

}
