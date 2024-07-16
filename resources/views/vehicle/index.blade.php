<x-app-layout>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <section class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 container mx-auto p-10 md:p-20 transform duration-500">
        @foreach ($vehicles as $vehicle)
            <x-admin-vehicle :vehicle="$vehicle" />
        @endforeach
    </section>
</x-app-layout>
