<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class WhistleBlowingForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', [
                'rules' => 'required|min:5'
            ])
            ->add('conduct', 'textarea', [
                'rules' => 'required'
            ])
            ->add('remarks', 'textarea')
            ->add('submit', 'submit', ['label' => 'Submit', 'attr' => ['class' => 'btn btn-primary btn-block']]);

    }
}
