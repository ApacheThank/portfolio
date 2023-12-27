
<x-app-layout>
    @include('_partials.sidebar')
        <div class="basis-4/5 mt-8 bg-white dark:bg-gray-900">
            <article class="prose mx-4 w-full text-gray-900 rounded-lg dark:text-white pl-2">
                <div class="flex justify-end">
                    <a href="{{$project->url}}" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-50 dark:bg-red-600/30 rounded-lg hover:bg-red-500/50 focus:ring-4 focus:outline-none">
                            Aller sur le site
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                </div>
                <div class="mx-auto max-w-screen-sm text-center mt-2">
                    <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{$project['name']}}</h2>
                    {{-- <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p> --}}


                </div>
                <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8 flex justify-center">
                    <img class="h-auto lg:text-4xl rounded-lg" src="{{asset('/storage/'.$project->featured_image)}}" alt="image description">
                </div>
                <div class="show-work">
                    {!! $project->description !!}
                </div>


                {{-- <x-markdown theme="dracula" >
                {{$project->description}}
                </x-markdown> --}}
            </article>
        </div>
</x-app-layout>