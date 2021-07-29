<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $game->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
            <div class="flex flex-col items-center  min-h-screen">

                <!-- Main info -->
                <div class="w-full ">
                    <div class="flex flex-col">
                        <div class="bg-white border border-white shadow-lg  rounded p-4 m-4">
                            <div class="flex-none sm:flex">
                                <div class="h-48 w-32   sm:mb-0 mb-3 flex-shrink-0">
                                    <img src="{{ asset('storage/games/'.$game->id.'/' .$game->cover) }}"
                                        class=" w-32 h-48 object-cover rounded">
                                </div>
                                <div class="flex-auto sm:ml-5 justify-evenly">
                                    <div class="flex items-center justify-between sm:mt-2">
                                        <div class="flex items-center">
                                            <div class="flex flex-col">
                                                <div
                                                    class="w-full flex-none text-gray-800 font-bold leading-none text-3xl">
                                                    <h1> {{ $game->title }}
                                                        ({{ Carbon\Carbon::parse($game->release)->format('Y')  }})</h1>
                                                </div>
                                                <div class="flex-auto text-gray-500 my-1 text-sm">
                                                    @foreach($game->genres as $genre)
                                                    @if(!$loop->last)
                                                    <span class="mr-3 ">{{ $genre->name }}</span><span
                                                        class="mr-3 border-r border-gray-200  max-h-0"></span>
                                                    @else
                                                    <span class="mr-3 ">{{ $genre->name }}</span>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-center">
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
                                    <div class="flex pt-2  text-sm text-gray-500">
                                        <div class="flex-1 inline-flex items-center">
                                            <a href="{{route('download', $game->id)}}"
                                                class="mb-2 mt-2 md:mb-0 bg-white px-4 py-2 shadow-sm tracking-wider border text-gray-50 rounded hover:bg-gray-600 bg-gray-800 inline-flex items-center space-x-2"
                                                download id="download_button">
                                                <span class="text-green-400 hover:text-green-500 rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                    </svg>
                                                </span>
                                                <span>Download (<span
                                                        id="download_count">{{ $game->downloads->count() }}</span>)</span>
                                                <script>
                                                    $(document).ready(function () {
                                                $('#download_button').click(function (e) { 
                                                              
                                                                var original = parseInt($('#download_count').text());
                                                                $('#download_count').text(original + 1);

                                                            });
                                            });
                                                </script>
                                            </a>
                                        </div>



                                    </div>
                                    <div class="flex pt-2  text-sm text-gray-500">
                                        <div class="flex w-2/3 pr-4">
                                            {{ $game->summary }}

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Screenshots -->
                <div class="w-full ">
                    <div class="flex flex-col">
                        <div class="bg-white border border-white shadow-lg  rounded p-4 m-4">
                            <div class="flex-none sm:flex">

                                <div class="flex-auto sm:ml-5 justify-evenly">



                                    <div class="flex pt-2  text-sm text-gray-500">

                                        <div class="flex flex-col w-full">

                                            <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
                                                <template
                                                    @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;"
                                                    x-if="imgModal">
                                                    <div x-transition:enter="transition ease-out duration-300"
                                                        x-transition:enter-start="opacity-0 transform scale-90"
                                                        x-transition:enter-end="opacity-100 transform scale-100"
                                                        x-transition:leave="transition ease-in duration-300"
                                                        x-transition:leave-start="opacity-100 transform scale-100"
                                                        x-transition:leave-end="opacity-0 transform scale-90"
                                                        x-on:click.away="imgModalSrc = ''"
                                                        class="p-2 fixed w-full h-full inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
                                                        <div @click.away="imgModal = ''"
                                                            class="flex flex-col max-h-full overflow-auto">
                                                            <div class="z-50">
                                                                <button @click="imgModal = ''"
                                                                    class="float-right pt-2 pr-2 outline-none focus:outline-none">
                                                                    <svg class="fill-current text-white "
                                                                        xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18">
                                                                        <path
                                                                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="p-2">
                                                                <img :alt="imgModalSrc" class="object-contain "
                                                                    :src="imgModalSrc">
                                                                <p x-text="imgModalDesc" class="text-center text-white">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </template>
                                            </div>

                                            <span class="text-gray-800 font-bold leading-none text-2xl mb-2 ">
                                                <h2>Screenshots</h2>
                                            </span>
                                            <div x-data="{}" class="px-2">
                                                <div class="flex flex-wrap -mx-2 ">

                                                    @foreach($screenshots as $screenshot)
                                                    <div class="w-1/6 pr-2 flex-shrink-0 pb-2">

                                                        <a @click="$dispatch('img-modal', {  imgModalSrc: 'https://images.igdb.com/igdb/image/upload/t_screenshot_huge/{{ $screenshot }}.jpg', imgModalDesc: '' })"
                                                            class="cursor-pointer">
                                                            <img alt="Placeholder" class="object-cover rounded"
                                                                src="https://images.igdb.com/igdb/image/upload/t_screenshot_huge/{{ $screenshot }}.jpg">
                                                        </a>
                                                    </div>

                                                    @endforeach



                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Videos -->
                <div class="w-full ">
                    <div class="flex flex-col">
                        <div class="bg-white border border-white shadow-lg  rounded p-4 m-4">
                            <div class="flex-none sm:flex">

                                <div class="flex-auto sm:ml-5 justify-evenly">



                                    <div class="flex pt-2  text-sm text-gray-500">

                                        <div class="flex flex-col w-full">



                                            <span class="text-gray-800 font-bold leading-none text-2xl mb-2 ">
                                                <h2>Videoer</h2>
                                            </span>

                                            <div class="flex flex-wrap ">


                                                @if(!empty($videos))

                                                @foreach($videos as $video)
                                                <div class="w-1/2 pr-2 flex-shrink-0 pb-2">
                                                    <iframe width="560" height="315"
                                                        src="https://www.youtube.com/embed/{{ $video }}"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>

                                                </div>

                                                @endforeach
                                                @else
                                                <div class="w-1/2 pr-2 flex-shrink-0 pb-2">
                                                    <span class="text-gray-800 leading-none mb-2">
                                                        Der
                                                        er ingen videoer</span>
                                                </div>
                                                @endif


                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full ">
                    <div class="flex flex-col">
                        <div class="bg-white border border-white shadow-lg  rounded p-4 m-4">
                            <div class="flex-none sm:flex">

                                <div class="flex-auto sm:ml-5 justify-evenly">
                                    <div class="pt-0">
                                        <input type="text" placeholder="Fix forkert spil"
                                            class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring-2 focus:ring-gray-200	 w-full" />
                                    </div>

                                    <form id="game_{{ $game->id }}" action="{{route('change_game', $game->id)}}"
                                        method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="game_id" value="{{ $game->id }}">
                                        <div class="flex flex-col ">
                                            <div class="bg-white shadow-md rounded p-4 hover:bg-gray-100 cursor-pointer game-selected"
                                                data-id="{{ $game->id }}">
                                                <div class="flex-none lg:flex">
                                                    <div
                                                        class="h-full w-full lg:h-full lg:w-24 lg:mb-0 mb-3 flex-shrink-0">
                                                        <img src="{{ asset('storage/games/'.$game->id.'/' .$game->cover) }}"
                                                            class=" w-full  object-scale-down lg:object-cover h-full rounded">
                                                    </div>
                                                    <div class="flex-auto ml-3 justify-evenly py-2 flex-grow-0">
                                                        <div class="flex flex-wrap ">
                                                            <div
                                                                class="w-full flex-none text-xs text-blue-700 font-medium ">
                                                                <div class="flex">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" @if($game->rating >= 0 )
                                                                        fill="currentColor" @else fill="none" @endif
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor" class="h-5 w-5
                                                                        text-yellow-500">
                                                                        <path
                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                        </path>
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" @if($game->rating>= 20 )
                                                                        fill="currentColor" @else fill="none" @endif
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor" class="h-5 w-5
                                                                        text-yellow-500">
                                                                        <path
                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" @if($game->rating>= 40 )
                                                                        fill="currentColor" @else fill="none" @endif
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor" class="h-5 w-5
                                                                        text-yellow-500">
                                                                        <path
                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" @if($game->rating>= 60 )
                                                                        fill="currentColor" @else fill="none" @endif
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor" class="h-5 w-5
                                                                        text-yellow-500">
                                                                        <path
                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                        </path>
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        @if($game->rating>= 80 )
                                                                        fill="currentColor" @else fill="none" @endif
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor" class="h-5 w-5
                                                                        text-yellow-500">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                                        </path>
                                                                    </svg>
                                                                </div>


                                                            </div>

                                                            <h2 class="flex-auto text-lg font-medium">
                                                                {{ $game->title }}
                                                                ({{ Carbon\Carbon::parse($game->release)->format('Y')  }})
                                                            </h2>

                                                        </div>

                                                        <div class="flex p-3 pb-1 border-t border-gray-200 "></div>

                                                        <div class="flex space-x-3 text-sm font-medium">
                                                            {{ $game->summary }}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <script>
                                        $(document).ready(function () {
                                        $('.game-selected').click(function () { 
                                              
                                              var id = $(this).data('id');
                                            
                                              $('#game_'+id).submit();
                                              
                                          });
                                      });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

</x-app-layout>