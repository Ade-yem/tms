<article class="shadow-lg mx-auto max-w-sm relative">
    <a href="{{ route('vehicles.show', $vehicle->id) }}">
    <img class="w-full h-auto" src="{{$vehicle->image}}" alt="{{$vehicle->name}}" />
    <span class="absolute right-4 top-4 bg-gray-600 text-white rounded-md p-1 pl-4 pr-4 font-semibold">{{$vehicle->rate}}</span>
    <div class="p-7 my-auto pb-10 ">
        <h1 class="text-2xl font-semibold text-gray-800">{{$vehicle->name}}</h1>
        <p class="text-base text-gray-400 mt-2">
            {{$vehicle->model}}
        </p>
        <p class="text-base text-gray-400 mt-2">
            {{$vehicle->quantity}}
        </p>
    </div>
    </a>
    <div class="m-auto mt-2 flex space-around">
        <x-secondary-button> <a href="{{route('vehicles.edit', $vehicle->id)}}">Edit</a></x-secondary-button>
        <x-secondary-button> <a href="{{route('vehicles.destroy', $vehicle->id)}}">Delete</a></x-secondary-button>
    </div>
</article>
