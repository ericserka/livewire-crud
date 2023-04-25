<div>
    <div class="w-full text-center bg-teal-800 my-5 text-white font-bold p-2 rounded-lg">
        Listar Clientes
    </div>

    <div class=" bg-teal-600 text-white font-bold grid grid-cols-6">
        <div class="pl-1 text-center pt-2">Name</div>
        <div class="pl-1 text-center pt-2">SSN</div>
        <div class="pl-1 text-center pt-2">Birthdate</div>
        <div class="pl-1 text-center pt-2">Email</div>
        <div class="pl-1 text-center pt-2">Gender</div>
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
            <div class="pl-1 mb-4 col-span-1  w-full">{{ $customer->gender }}</div>
            <div class="pl-1 mb-4 flex text-white w-full">
                <a href="#"
                    class="bg-red-800 font-bold m-1 py-1 px-3 rounded-xl text-red-50 hover:bg-red-700 hover:text-white">
                    Apagar
                </a>
                <a href="#"
                    class="bg-blue-800 font-bold m-1 py-1 px-3 rounded-xl text-blue-50 hover:bg-blue-700 hover:text-white">
                    Editar
                </a>
            </div>
        </div>
    @endforeach
</div>
