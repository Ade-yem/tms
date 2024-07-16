<x-app-layout>
    <form method="POST" action="{{ route('edit-schedule') }}">
        @csrf
        <div>
            <x-input-label for="start_time" :value="__('Start date')" />
            <x-date-picker id="start_time" class="block mt-1 w-full" type="datetime-local" start_time="start_time" :value="old('start_time', $schedule->start_time)" required autofocus autocomplete="start_time" />
            <x-input-error :messages="$errors->get('start_time')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="end_time" :value="__('End date')" />
            <x-date-picker id="end_time" class="block mt-1 w-full" type="datetime-local" end_time="end_time" :value="old('end_time', $schedule->end_time)" required autofocus autocomplete="end_time" />
            <x-input-error :messages="$errors->get('end_time')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Image link of the vehicle')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $schedule->email)" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="vehicle" :value="__('Model and year of the Vehicle')" />
            <x-text-input id="vehicle" class="block mt-1 w-full" type="text" name="vehicle" :value="old('Model year', $schedule->vehicle)" required autocomplete="vehicle" />
            <x-input-error :messages="$errors->get('vehicle')" class="mt-2" />
        </div>

    </form>

</x-app-layout>
