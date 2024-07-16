<x-app-layout>
    <section class="grid md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-4 grid-cols-1 gap-8">
        @foreach ($vehicle_requests as $request)
        <article class="mx-auto max-w-sm pb-8 bg-cover bg-center cursor-pointer transform duration-500 text-xs hover:-translate-y-1 shadow-2xl rounded-xl">
            <h2 class="text-center text-3xl mt-8 font-bold min-h-18 px-12">
                {{$request->nameOfVehicle}}
            </h2>
            <p class="m-4 p-4 leading-relaxed text-center ">
                Email: {{ $request->email }}
            </p>
            <p class="m-4 p-4 leading-relaxed text-center ">
                Vehicle: {{ $request->vehicleModel }}
            </p>
            <p class="m-4 p-4 leading-relaxed text-center ">
                Destination: {{ $request->whereTo }}
            </p>
            <p class="m-4 p-4 leading-relaxed text-center ">
                Reason: {{ $request->reason }}
            </p>
            <div class="flex m-auto justify-center space-x-2 ">
                <button class="bg-primary dark:bg-dark-primary block text-white py-2 px-4"><a href="{{ route('create-specific-schedule', ['vehicleRequest' => $request->vehicleModel]) }}" >Act on request</a></button>
                {{-- <button class="bg-primary dark:bg-dark-primary block text-white py-2 px-4"><a href="{{ route('create-schedule-view') }}" >Act on request</a></button> --}}
                <button class="bg-primary dark:bg-dark-primary block text-white py-2 px-4" disabled><a href="#" >Reject request</a></button>
            </div>
        </article>
        @endforeach
    </section>
</x-app-layout>
