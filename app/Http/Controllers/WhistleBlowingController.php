<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\WhistleBlowingForm;

class WhistleBlowingController extends Controller
{
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(WhistleBlowingForm::class, [
            'method' => 'POST',
            'url' => route('whistle-blowing.store')
        ]);

        return view('whistle-blowing.create', compact('form'));
    }
    
    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(WhistleBlowingForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        // Do saving and other things...
    }    
}
