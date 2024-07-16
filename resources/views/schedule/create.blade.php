<x-app-layout>
    <h1 class="text-center font-bold text-lg p-4">Create a schedule</h1>
    <form method="POST" action="{{ route('create-schedule') }}" class="sm:w-[70%] w-full m-auto py-6 px-8">
        @csrf
        <div>
            <x-input-label for="start_time" :value="__('Start date')" />
            <x-date-picker id="start_time" class="block mt-1 w-full" type="datetime-local" start_time="start_time" :value="old('start_time')" required autofocus autocomplete="start_time" />
            <x-input-error :messages="$errors->get('start_time')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="end_time" :value="__('End date')" />
            <x-date-picker id="end_time" class="block mt-1 w-full" type="datetime-local" end_time="end_time" :value="old('end_time')" required autofocus autocomplete="end_time" />
            <x-input-error :messages="$errors->get('end_time')" class="mt-2" />
        </div>

        @isset($vehicleRequest)
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$vehicleRequest->email}}" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="vehicle" :value="__('Model of the Vehicle')" />
            <x-text-input id="vehicle" class="block mt-1 w-full" type="text" name="vehicle" value="{{$vehicleRequest->vehicleModel}}" required autocomplete="vehicle" />
            <x-input-error :messages="$errors->get('vehicle')" class="mt-2" />
        </div>
        @else
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="vehicle" :value="__('Model of the Vehicle')" />
            <x-text-input id="vehicle" class="block mt-1 w-full" type="text" name="vehicle" :value="old('Model year')" required autocomplete="vehicle" />
            <x-input-error :messages="$errors->get('vehicle')" class="mt-2" />
        </div>
        @endisset

        <div class="mt-4 w-full">
            <x-primary-button class="w-full flex justify-center">
                {{ __('Create Schedule') }}
            </x-primary-button>
        </div>

    </form>

</x-app-layout>
