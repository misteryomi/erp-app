<?php

namespace App\Http\Controllers\UtilityForms;

use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\Field;
use App\Forms\WhistleBlowingForm;
use Kris\LaravelFormBuilder\Form;

class FormClass {

    private $formBuilder;
    private $formFields;
    private $storeRoute;
    private $formView;

    function __construct(FormBuilder $formBuilder, $formFields, $storeRoute, $formView) {
        $this->formFields = $formFields;
        $this->storeRoute = $storeRoute;
        $this->formBuilder = $formBuilder;
        $this->formView = $formView;
    }

    function showForm()
    {
        $form = $this->buildForm();

        return view($this->formView, compact('form'));
    }
    
    public function storeFormData()
    {
        $form = $this->formBuilder->createByArray($this->formFields);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        return $form;
    }    


    private function buildForm() {
        $form = $this->formBuilder->createByArray($this->formFields, [
            'method' => 'POST',
            'url' => route($this->storeRoute)
        ]);

        $form->add('submit', 'submit', 
                    [
                    'label' => 'Submit', 
                    'attr' => ['class' => 'btn btn-primary btn-block'
                    ]
                ]);

        return $form;
    }


}