<section class="bg-white dark:bg-gray-900 antialiased bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full top-0 left-0 z-0">
  <div class="max-w-screen-xl px-4 py-4 mx-auto lg:px-3 sm:py-8 lg:py-12">
    <div class="max-w-2xl mx-auto text-center">
      <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
        Mon Blog
      </h2>
      <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
        Fait avec compétence et soin pour aider nos clients à développer leur entreprise !
      </p>
    </div>
    <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($recent_projects as $project)
          <div class="space-y-4">
              <span
                  class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                  @if($project->name=='Rivalwork')
                    Laravel/Wordpress
                  @else
                    {{$project->category->name}}
                  @endif
              </span>
              <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                  {{$project['name']}}
              </h3>
              <img src="{{asset('/storage/'.$project->featured_image)}}" alt="{{$project['name']}}">
              <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                  {{ str_replace('`','',Str::limit(strip_tags($project->description),150)) }}          
              </p>
              
              <a href="{{ url('/project/' . $project['id']) }}" title="{{$project['name']}}"
                  class="text-white bg-red-50 dark:bg-red-600/30 justify-center hover:bg-red-500/50 inline-flex items-center focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center "
                  role="button">
                  Voir
                  <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                      d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
                  </svg>
              </a>
          </div>
      @endforeach
    </div>
  </div>
</section>
