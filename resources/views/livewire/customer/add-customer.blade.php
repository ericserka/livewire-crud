<div class="mt-3">
    <div class="w-full text-center bg-teal-800 my-5 text-white font-bold p-2 rounded-lg">Add new customer</div>
    <div class="m-1">
        <a href="{{ route('list-customer') }}" class="btn-default mb-2">Customer List</a>
        @if (session()->has('success'))
            <x-notification>
                {{ session('success') }}
            </x-notification>
        @endif
    </div>
    <form wire:submit.prevent="submit">
        <div class="w-full">
            <label for="name">Name</label>
            <input type="text" id="name" wire:model.defer="name" class="input" placeholder="Name">
            @error('name')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex">
            <div class="m-1 w-full">
                <label for="ssn">SSN</label>
                <input id="ssn" wire:model.defer="ssn" class="input" x-data x-mask="999-99-9999"
                    placeholder="999-99-9999">
                @error('ssn')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="m-1 w-full">
                <label for="birth_date">Birthdate</label>
                <input type="text" id="birth_date" wire:model.defer="birth_date" x-data x-mask="9999-99-99"
                    class="input" placeholder="2023-01-02">
                @error('birth_date')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex">
            <div class="m-1 w-full">
                <label for="email">Email</label>
                <input type="text" id="email" wire:model.defer="email" class="input"
                    placeholder="email@email.com">
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="m-1 w-full">
                <label for="sex">Sex</label>
                <select id="sex" class="input" wire:model.defer="sex">
                    <option>Select</option>
                    <option value="F">Female</option>
                    <option value="M">Male</option>
                </select>
                @error('sex')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit" class="w-full my-3 btn-submit">Save</button>
    </form>
</div>
