<x-app-layout>
    <section class="relative py-16">
        <div class="w-full mb-12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
                            <h3 class="font-semibold text-lg text-primary dark:text-dark-primary">Schedule</h3>
                        </div>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto ">
                    <table class="items-center w-full bg-transparent border-collapse">
                        <tr>
                            <th class="">Start Time</th>
                            <th class="">End Time</th>
                            <th class="">Email</th>
                            <th class="">Vehicle</th>
                            <th class="">Completed</th>
                            <th class="">Action</th>
                        </tr>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">{{ $schedule->start_time }}</td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">{{ $schedule->end_time }}</td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">{{ $schedule->email }}</td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">{{ $schedule->vehicle }}</td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">{{ $schedule->completed }}</td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center"><button class="bg-primary dark:border-b-dark-primary text-white rounded-lg text-sm sm:text-base px-4 py-2"><a href="{{ route('show-schedule', $schedule->id) }}">Show</a></button></td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>


    </section>

</x-app-layout>
