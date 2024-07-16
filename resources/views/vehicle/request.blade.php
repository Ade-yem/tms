<x-app-layout>
    <h1 class="text-center font-bold text-lg p-4">Request for a vehicle</h1>
    <form method="POST" action="{{ route('vehicles.request.store') }}" class="sm:w-[70%] w-full m-auto py-6 px-8">
        @csrf
        @isset($vehicle)
            <!-- Display vehicle information or pre-fill form fields -->
            <div>
                <x-input-label for="nameOfVehicle" :value="__('Name of Vehicle')" />
                <x-text-input id="nameOfVehicle" class="block mt-1 w-full" type="text" name="nameOfVehicle" value="{{ $vehicle->name }}" required autofocus autocomplete="nameOfVehicle" />
                <x-input-error :messages="$errors->get('nameOfVehicle')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="vehicleModel" :value="__('Model of the Vehicle')" />
                <x-text-input id="vehicleModel" class="block mt-1 w-full" type="text" name="vehicleModel" value="{{$vehicle->model}}" required autocomplete="vehicleModel" />
                <x-input-error :messages="$errors->get('vehicleModel')" class="mt-2" />
            </div>
        @else
            <!-- Display the form fields without pre-filling -->
            <div>
                <x-input-label for="nameOfVehicle" :value="__('Name of Vehicle')" />
                <x-text-input id="nameOfVehicle" class="block mt-1 w-full" type="text" name="nameOfVehicle" :value="old('nameOfVehicle')" required autofocus autocomplete="nameOfVehicle" />
                <x-input-error :messages="$errors->get('nameOfVehicle')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="vehicleModel" :value="__('Model of the Vehicle')" />
                <x-text-input id="vehicleModel" class="block mt-1 w-full" type="text" name="vehicleModel" :value="old('vehicleModel')" required autocomplete="vehicleModel" />
                <x-input-error :messages="$errors->get('vehicleModel')" class="mt-2" />
            </div>
        @endisset

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{Auth::user()->email}}" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="whereTo" :value="__('Where are you going to use the vehicle')" />
            <x-text-input id="whereTo" class="block mt-1 w-full" type="text" name="whereTo" :value="old('whereTo')" required autocomplete="whereTo" />
            <x-input-error :messages="$errors->get('whereTo')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="reason" :value="__('Reason')" />
            <x-text-area id="reason" class="block mt-1 w-full" type="text" name="reason" :value="old('reason')" required autocomplete="reason" />
            <x-input-error :messages="$errors->get('reason')" class="mt-2" />
        </div>
        <div class="mt-4 w-full">
            <x-primary-button class="w-full flex justify-center">
                {{ __('Make request') }}
            </x-primary-button>
        </div>

    </form>

</x-app-layout>
