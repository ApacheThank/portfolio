



<x-app-layout>
    @include('_partials.sidebar')
    {{-- <div class="grow px-5 py-5"> --}}
    <div class="grow py-5 px-5 ">
        @foreach ($projects as $project)
        <div class="row py-4 px-4 my-4 bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 rounded-lg shadow">
            <a href="{{ url('/project/' . $project['id']) }}" class="flex flex-col items-center bg-white rounded-lg shadow md:flex-row hover:bg-red-400/20 dark:border-gray-700 dark:bg-gray-800">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{asset('/storage/'.$project->featured_image)}}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$project['name']}}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ str_replace('`','',Str::limit(strip_tags($project->description),100)) }}</p>
                </div>
            </a>
        </div>
        @endforeach
        {{$projects->links()}}
    </div>
</x-app-layout>