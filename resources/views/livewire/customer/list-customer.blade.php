<div>
    <div class="w-full text-center bg-teal-800 my-5 text-white font-bold p-2 rounded-lg">
        Listar Clientes
    </div>

    <div class="border-2 p-2 rounded-lg m-2">
        Filter:
        <label class="px-5">
            <input type="radio" wire:model="radio" name="radio" value="name"
                class="accent-teal-300 focus:accent-teal-600"> Name
        </label>
        <label class="px-5">
            <input type="radio" wire:model="radio" name="radio" value="ssn"
                class="accent-teal-300 focus:accent-teal-600"> SSN
        </label>
        <label class="px-5">
            <input type="radio" wire:model="radio" name="radio" value="birth_date"
                class="accent-teal-300 focus:accent-teal-600"> Birthdate
        </label>
        <label class="px-5">
            <input type="radio" wire:model="radio" name="radio" value="email"
                class="accent-teal-300 focus:accent-teal-600"> Email
        </label>
        <input type="search" class="w-1/2 p-1 rounded-lg" wire:model.debounce.500ms="search">
        <a href="#" wire:click.prevent="clear" class="btn-default">Clear</a>
    </div>
    <div class=" bg-teal-600 text-white font-bold grid grid-cols-6">
        <div class="pl-1 text-center pt-2">Name</div>
        <div class="pl-1 text-center pt-2">SSN</div>
        <div class="pl-1 text-center pt-2">Birthdate</div>
        <div class="pl-1 text-center pt-2">Email</div>
        <div class="pl-1 text-center pt-2">Sex</div>
        <div class="pl-1 text-center pt-2"> </div>
    </div>

    @foreach ($customers as $customer)
        <div
            class="
            grid
            grid-cols-6
            text-center
            odd:bg-teal-100
            even:bg-green-200
            hover:text-orange-600
            hover:bg-slate-200
            ">
            <div class="pl-1 w-full">{{ $customer->name }}</div>
            <div class="pl-1">{{ $customer->ssn }}</div>
            <div class="pl-1 w-full">{{ $customer->birth_date }}</div>
            <div class="pl-1 w-full">{{ $customer->email }}</div>
            <div class="pl-1 mb-4 col-span-1  w-full">{{ $customer->sex }}</div>
            <div class="pl-1 mb-4 flex text-white w-full">
                <a href="#" x-data wire:click.prevent="storeCustomerId({{ $customer->id }})"
                    @click="$dispatch('toggle-modal', {'show':true})" class="btn-delete">
                    Apagar
                </a>
                <a href="#"
                    class="bg-blue-800 font-bold m-1 py-1 px-3 rounded-xl text-blue-50 hover:bg-blue-700 hover:text-white">
                    Editar
                </a>
            </div>
        </div>
    @endforeach

    {{ $customers->links('vendor.livewire.tailwind') }}

    <x-modal size="lg" close_btn="false">
        <x-slot:title>
            <div class="flex">
                <x-gmdi-delete class="w-5 h-5 text-red-800 mr-2" />
                Delete Record
            </div>
            </x-slot>
            Do you want to delete the record permanently?
            <div class="flex mt-3">
                <button @click="$dispatch('toggle-modal', {'show':false})" class="grow btn-cancel">Cancel</button>
                <button wire:click="delete" @click="$dispatch('toggle-modal', {'show':false})"
                    class="grow btn-delete">Delete</button>
            </div>
    </x-modal>
</div>
