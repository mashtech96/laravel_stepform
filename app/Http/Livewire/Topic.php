<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Topic extends Component
{
    public $currentStep = 1;
    public $name, $description;
    public $successMsg = '';

    /**
     * Write code on Method
     */
    public function render()
    {
        return view('livewire.topic');
    }

    /**
     * Write code on Method
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        $this->currentStep = 2;
    }

    /**
     * Write code on Method
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'description' => 'required',
        ]);

        $this->currentStep = 3;
    }

    /**
     * Write code on Method
     */
    public function submitForm()
    {

        //do whatever you want with data

        $this->successMsg = 'Topic successfully created.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    /**
     * Write code on Method
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     */
    public function clearForm()
    {
        $this->name = '';
        $this->description = '';
    }
}
