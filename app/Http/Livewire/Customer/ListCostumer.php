<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class ListCostumer extends Component
{
    public function render()
    {
        $customer = Customer::query();
        return view('livewire.customer.list-costumer', [
            'customers' => $customer->orderBy('name', 'asc')->get()
        ]);
    }
}
