<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class ListCostumer extends Component
{

    use WithPagination;

    public $search;
    public $radio = "name";
    public $costumer_id;

    public function clear()
    {
        $this->reset(["search", "radio"]);
    }

    public function delete()
    {
        Customer::where("id", $this->costumer_id)->delete();
    }

    public function storeCostumerId($id)
    {
        $this->costumer_id = $id;
    }

    public function render()
    {
        $customer = Customer::query();
        $customer->when($this->radio != "null" && $this->search != "null", function ($query) {
            return $query->where($this->radio, "like", "%$this->search%");
        });
        return view("livewire.customer.list-costumer", [
            "customers" => $customer->orderBy("name", "asc")->paginate(10)
        ]);
    }
}
