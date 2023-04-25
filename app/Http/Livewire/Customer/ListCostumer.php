<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class ListCostumer extends Component
{

    public $search;
    public $radio = "name";

    public function clear()
    {
        $this->reset(["search", "radio"]);
    }

    public function delete($id)
    {
        Customer::where("id", $id)->delete();
    }

    public function render()
    {
        $customer = Customer::query();
        $customer->when($this->radio != "null" && $this->search != "null", function ($query) {
            return $query->where($this->radio, "like", "%$this->search%");
        });
        return view("livewire.customer.list-costumer", [
            "customers" => $customer->orderBy("name", "asc")->get()
        ]);
    }
}
