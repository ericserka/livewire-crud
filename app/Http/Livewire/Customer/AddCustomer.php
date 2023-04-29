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
    public $customer_id;

    protected $rules = ["name" => "required|min:4", "ssn" => "required|min:11", "birth_date" => "required|min:10", "email" => "required|email", "sex" => "required"];

    // populate the form according to the id sent by the route
    public function mount(Customer $customer)
    {
        $this->customer_id = $customer->id;
        $this->name = $customer->name;
        $this->ssn = $customer->ssn;
        $this->birth_date = $customer->birth_date;
        $this->email = $customer->email;
        $this->sex = $customer->sex;
    }

    public function submit()
    {
        $this->validate();

        Customer::updateOrCreate(["id" => $this->customer_id], [
            "name" => $this->name,
            "ssn" => $this->ssn,
            "birth_date" => $this->birth_date,
            "email" => $this->email,
            "sex" => $this->sex,
        ]);

        session()->flash("success", "$this->name customer data successfully saved");

        redirect()->route("list-customer");
    }

    public function render()
    {
        return view('livewire.customer.add-customer');
    }
}
