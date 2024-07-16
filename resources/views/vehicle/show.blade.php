<x-app-layout>
    <div class="w-full m-auto container mt-4 sm:w-[70%] ">
        <h1 class="text-2xl text-center font-semibold text-gray-900">Vehicle Details</h1>
        <div class="mt-4">
            <div class="flex justify-between">
                <div>
                    <h2 class="text-xl font-semibold text-gray-900">{{ $vehicle->name }}</h2>
                    <p class="text-sm text-gray-500">{{ $vehicle->model }}</p>
                </div>
                <div>
                    <p class="text-xl font-semibold text-gray-900">&#x20a6;{{ $vehicle->rate }} / day</p>
                    <p class="text-sm text-gray-500">Available: {{ $vehicle->quantity }}</p>
                </div>
            </div>
            <div class="mt-4">
                <img src="{{ $vehicle->image }}" alt="{{ $vehicle->name }}" class="w-full h-96 object-cover">
            </div>
            <div class="mt-4">
                <p class="text-sm text-gray-500">{{ $vehicle->numOfSeats }} seats</p>
            </div>
        </div>
    </div>
</x-app-layout>
