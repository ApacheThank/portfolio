<x-app-layout>
        <div class="grow h-screen py-5 px-5 ">
        @forelse ($articles as $article)
            {{-- <div class="row py-4 px-4 my-4 bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 rounded-lg shadow">
                <a class="rounded-sm grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform"
                href="{{ url('/post/' . $article['id']) }}">
                    <!-- Title -->
                    <div class="col-span-11 xl:-ml-5">
                    <p class="text-blue-600 font-semibold">{{$article['title']}}</p>
                    </div>
                    <!-- Description -->
                    <div class="md:col-start-2 col-span-11 xl:-ml-5">
                    <p class="text-sm text-gray-800 font-light"> {{ str_replace('`','',Str::limit(strip_tags($article->content,50))) }}</p>
                    </div>
                </a>
            </div> --}}
            <div class="row py-4 px-4 my-4 bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 rounded-lg shadow">
                <a href="{{ url('/post/' . $article['id']) }}" class="flex flex-col items-center bg-white rounded-lg shadow md:flex-row hover:bg-red-400/20 dark:border-gray-700 dark:bg-gray-800">
                    {{-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{asset('/storage/'.$project->featured_image)}}" alt=""> --}}
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$article['title']}}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ str_replace('`','',Str::limit(strip_tags($article->content),100)) }}</p>
                    </div>
                </a>
            </div>
        @empty
        <div class="flex flex-col bg-gray-50  py-4 px-4 my-4 bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 rounded-lg shadow items-center justify-center">
            <h1 class="text-4xl font-bold text-gray-400  mb-4">No result found</h1>
            <p class="text-gray-600">Sorry, the page you're looking for doesn't exist.</p>
            {{-- <div class="mt-6">
              <input
                type="text"
                placeholder="Search for content..."
                class="px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
              />
            </div> --}}
            <div class="mt-4 text-center">
              <p class="text-gray-600 mb-3">Or, you might want to explore:</p>
              <a href="/" class="text-blue-500 hover:underline">Home</a>
              <a href="/projects" class="text-blue-500 hover:underline ml-2">Projets</a>
              <a href="/contact" class="text-blue-500 hover:underline ml-2">Contact</a>
            </div>
          </div>
        @endforelse
    </div>
</x-app-layout>
