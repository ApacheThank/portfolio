



<x-app-layout>
    @include('_partials.sidebar')
    {{-- <div class="grow px-5 py-5"> --}}
    <div class="grow py-5 px-5 ">
        @foreach ($recent_posts as $post)
        <div class="row py-4 px-4 my-4 bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 rounded-lg shadow">
            <a href="{{ url('/post/' . $post['id']) }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post['title']}}</h5>
            </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    {{ str_replace('`','',Str::limit(strip_tags($post->content,50))) }}
                </p>
            <div class="flex justify-end">
                <a href="{{ url('/post/' . $post['id']) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-50 dark:bg-red-600/30 rounded-lg hover:bg-red-500/50 focus:ring-4 focus:outline-none">
                    Lire
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
        {{$recent_posts->links()}}
    </div>
        
    {{-- <div class="grow py-5 px-4">
    <section class="bg-white dark:bg-gray-900">
        <div class="grid grid-cols-1 gap-4 mb-4">
            @foreach ($recent_posts as $post)
            <div class="row mt-2 lg:grid-cols-2">
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-800">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                            Article
                        </span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="{{ url('/post/' . $post['id']) }}">{{$post['title']}}</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{$post['content']}}</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4 text-gray-600">
                            <span class="text-sm">14 days ago</span>
                        </div>
                        <a href="{{ url('/post/' . $post['id']) }}" class="inline-flex items-center text-gray-950 font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Lire
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </article>                  
            </div>
            @endforeach
        </div>
      </section>
</div> --}}
</x-app-layout>