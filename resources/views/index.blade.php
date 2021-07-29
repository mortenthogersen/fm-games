<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Spil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid mt-1 gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">

                @foreach($games as $game)

                <div class="flex flex-col">
                    <div class="bg-white shadow-md  rounded p-4">
                        <div class="flex-none lg:flex">
                            <div class="h-full w-full lg:h-full lg:w-24 lg:mb-0 mb-3 flex-shrink-0">
                                <a href="{{route('show', $game->id)}}"><img
                                        src="{{ asset('storage/games/'.$game->id.'/' .$game->cover) }}"
                                        class=" w-full  object-scale-down lg:object-cover h-full rounded"></a>
                            </div>
                            <div class="flex-auto ml-3 justify-evenly py-2 flex-grow-0">
                                <div class="flex flex-wrap ">
                                    <div class="w-full flex-none text-xs text-blue-700 font-medium ">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                @if($game->rating >= 0 ) fill="currentColor" @else fill="none" @endif
                                                viewBox="0 0 24 24"
                                                stroke="currentColor" class="h-5 w-5 text-yellow-500">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                @if($game->rating>= 20 ) fill="currentColor" @else fill="none" @endif
                                                viewBox="0 0 24 24"
                                                stroke="currentColor" class="h-5 w-5 text-yellow-500">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                @if($game->rating>= 40 ) fill="currentColor" @else fill="none" @endif
                                                viewBox="0 0 24 24"
                                                stroke="currentColor" class="h-5 w-5 text-yellow-500">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                @if($game->rating>= 60 ) fill="currentColor" @else fill="none" @endif
                                                viewBox="0 0 24 24"
                                                stroke="currentColor" class="h-5 w-5 text-yellow-500">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" @if($game->rating>= 80 )
                                                fill="currentColor" @else fill="none" @endif viewBox="0 0 24 24"
                                                stroke="currentColor" class="h-5 w-5 text-yellow-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                </path>
                                            </svg>
                                        </div>


                                    </div>
                                    <a href="{{route('show', $game->id)}}">
                                        <h2 class="flex-auto text-lg font-medium">{{ $game->title }}
                                            ({{ Carbon\Carbon::parse($game->release)->format('Y')  }})</h2>
                                    </a>
                                </div>

                                <div class="flex p-3 pb-1 border-t border-gray-200 "></div>

                                <div class="flex space-x-3 text-sm font-medium">

                                    <a href="{{route('show', $game->id)}}"
                                        class="mb-2 mt-2 md:mb-0 bg-white px-4 py-2 shadow-sm tracking-wider border text-gray-50 rounded hover:bg-gray-600 bg-gray-800 inline-flex items-center space-x-2"
                                        aria-label="Vis">
                                        <span>Gå til spil</span>
                                        <span class="text-green-400 hover:text-green-500 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                @endforeach

            </div>


        </div>
    </div>
</x-app-layout>