<?php

namespace App\Livewire;

use App\Models\Datasheet;
use App\Models\DatasheetApproval;
use App\Models\DatasheetValidation;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateDatasheet extends Component
{
    public string $surname, $firstname, $middlename, $sex, $civil_status, $birthdate, $birthplace, $citizenship, $height, $weight, $blood_type, $gsis_id_no, $pagibig_id_no, $philhealth_id_no, $sss_no, $tin_no, $email_address, $mobile_no, $telephone_no, $agency_employee_no, $name_extension;


    public $currentStep = 1;

    public function firstStepSubmit()
    {
        $personal_information = $this->validate([
            'surname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'sex' => 'required',
            'civil_status' => 'required',
            'birthdate' => 'required',
            'birthplace' => 'required',
            'citizenship' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'blood_type' => 'required',
            'gsis_id_no' => 'required',
            'pagibig_id_no' => 'required',
            'philhealth_id_no' => 'required',
            'sss_no' => 'required',
            'tin_no' => 'required',
            'email_address' => 'required|email',
            'mobile_no' => 'required',
            'telephone_no' => 'required',
            'agency_employee_no' => 'required',
        ]);
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $residential_address = $this->validate([
            'address_type' => 'required',
            'house_no' => 'required',
        ]);
        $this->currentStep = 3;
    }

//    public function create(): void
//    {
//        try {
//            Datasheet::create(
//                $this->validate()
//            );
//            session()->flash('success', 'Datasheet created.');
//            $this->reset('surname', 'first_name', 'middle_name');
//        } catch (\Exception $e) {
//            session()->flash('error', $e->getMessage());
//        }
//    }

    public function render()
    {
        return view('livewire.create-datasheet');
    }
}
