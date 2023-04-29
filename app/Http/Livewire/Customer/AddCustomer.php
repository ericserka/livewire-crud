<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class AddCustomer extends Component
{
    public $name;
    public $ssn;
    public $birth_date;
    public $email;
    public $sex;

    protected $rules = ["name" => "required|min:4", "ssn" => "required|min:11", "birth_date" => "required|min:10", "email" => "required|email", "sex" => "required"];

    public function submit()
    {
        $this->validate();

        Customer::create([
            "name" => $this->name,
            "ssn" => $this->ssn,
            "birth_date" => $this->birth_date,
            "email" => $this->email,
            "sex" => $this->sex,
        ]);

        session()->flash("success", "Customer $this->name successfully created.");

        $this->reset(["name", "ssn", "birth_date", "email", "sex"]);
    }

    public function render()
    {
        return view('livewire.customer.add-customer');
    }
}
