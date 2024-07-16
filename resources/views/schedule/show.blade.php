<x-app-layout>
    <section class="container flex flex-col w-[70%] mt-10 mx-auto">
        <div class="flex flex-col space-y-3">
            <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                {{ __('Schedule') }}
            </p>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                {{$schedule->start_time }} 
            </p>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                {{ __('TO') }}
            </p>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                {{$schedule->end_time}}
            </p>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                {{$schedule->user_email}}
            </p>
            <x-secondary-button x-data="" class="flex justify-center"
            x-on:click.prevent="$dispatch('open-modal', 'show-vehicle')">
            {{ __('Show Vehicle') }}
        </x-secondary-button>
        <x-modal name="show-vehicle" :show="$vehicle" focusable>
            @isset($vehicle->name)
            <article class="relative shadow-2xl max-w-lg min-h-80 w-full transform duration-500 hover:-translate-y-2 cursor-pointer rounded-md">
                <div class="flex absolute left-0 top-0 w-10 h-10 bg-orange-600 text-gray-100">
                    <span class="mx-auto my-auto" x-on:click="$dispatch('close')">
                        <span class="w-5 h-5"><x-left-arrow/></span>
                    </span>
                </div>
                <div class="bg-no-repeat bg-center overflow-hidden mt-10 min-h-96" style="background-image: url('svgs/blob-blue.svg');">
                    <img class="mx-auto p-5" src="{{$vehicle->image}}" alt="">
                </div>
                <div class="p-8 mb-10 mt-2">
                    <p class="text-xl text-gray-500">{{ $vehicle->name }}</p>
                    <h2 class="text-3xl mt-2">{{$vehicle->model}}</h2>
                </div>
            </article>
            @else
            <div class="flex justify-center items-center h-full">{{__('Nothing here')}}</div>
            @endisset
        </x-modal>
        </div>
    </section>
</x-app-layout>
