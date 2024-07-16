<x-home-layout>
    <section class="grid lg:grid-cols-3 2xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-10 container mx-auto p-10 md:p-20 transform duration-500">
        @foreach ($vehicles as $vehicle)
            <x-vehicle-card :vehicle="$vehicle" />
        @endforeach
    </section>
</x-home-layout>
