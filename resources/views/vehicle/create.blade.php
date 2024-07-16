<x-app-layout>
    <h1 class="text-center font-bold text-lg p-4">Add a vehicle</h1>
    <form method="POST" action="{{ route('vehicles.store') }}"  class="sm:w-[70%] w-full m-auto py-6 px-8">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name of Vehicle')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="image" :value="__('Image link of the vehicle')" />
            <x-text-input id="image" class="block mt-1 w-full" type="text" name="image" :value="old('image')" required autocomplete="image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="model" :value="__('Model and year of the Vehicle')" />
            <x-text-input id="model" class="block mt-1 w-full" type="text" name="model" :value="old('Model year')" required autocomplete="model" />
            <x-input-error :messages="$errors->get('model')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="quantity" :value="__('Quantity of the Vehicle')" />
            <x-text-input id="quantity" class="block mt-1 w-full" type="text" name="quantity" :value="old('quantity')" required autocomplete="quantity" />
            <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="numOfSeats" :value="__('Number of seats')" />
            <x-text-input id="numOfSeats" class="block mt-1 w-full" type="text" name="numOfSeats" :value="old('numOfSeats')" required autocomplete="numOfSeats" />
            <x-input-error :messages="$errors->get('numOfSeats')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="rate" :value="__('Rate per day')" />
            <x-text-input id="rate" class="block mt-1 w-full" type="text" name="rate" :value="old('rate')" required autocomplete="rate" />
            <x-input-error :messages="$errors->get('rate')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-primary-button class="flex w-full justify-center py-2">{{__('Add Vehicle')}}</x-primary-button>
        </div>
        
        <div class="mt-4 w-full">
            <x-primary-button class="w-full flex justify-center">
                {{ __('Add vehicle') }}
            </x-primary-button>
        </div>
    </form>

</x-app-layout>
