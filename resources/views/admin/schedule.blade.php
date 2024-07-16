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
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center  border-primary dark:border-dark-primary">Start Time</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center  border-primary dark:border-dark-primary">End Time</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center  border-primary dark:border-dark-primary">Email</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center  border-primary dark:border-dark-primary">Vehicle</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center  border-primary dark:border-dark-primary">Completed</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center  border-primary dark:border-dark-primary">Actions</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center  border-primary dark:border-dark-primary"></th>
                        </tr>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">{{ $schedule->start_time }}</td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">{{ $schedule->end_time }}</td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">{{ $schedule->email }}</td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">{{ $schedule->vehicle }}</td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">{{ $schedule->completed }}</td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 flex justify-around items-center">
                                    <a href="{{ route('edit-schedule', $schedule->id) }}" class="text-underline">Edit</a>
                                    <a href="{{ route('delete-schedule', $schedule->id) }}" class="text-underline">Delete</a>
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><button class="bg-primary dark:border-b-dark-primary text-white rounded-lg text-sm sm:text-base px-4 py-1 text-xs"><a href="{{ route('show-schedule', $schedule->id) }}">Show</a></button></td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>


    </section>

</x-app-layout>
