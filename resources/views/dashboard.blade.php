<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-lg font-medium">MUXIC - online sharing music website!</h2>
                    {{-- <ul class="space-y-6">
                        @foreach($songs as $song)
                        <li class="bg-white dark:bg-gray-800 p-4 sm:p-8 rounded-lg shadow">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">{{ $song->title }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $song->artist }}</p>
                            <div class="mt-4">
                                <audio controls class="w-full">
                                    <source src="{{ route('music.stream', ['filename' => $song->file_path]) }}" type="audio/mpeg">
                                </audio>
                            </div>
                        </li>
                        @endforeach
                    </ul> --}}

                    {{-- @foreach($songs as $song)
                        <div class="h-2 bg-gray-400"></div>
                        <div class="flex items-center justify-center mt-16 mb-16 ">
                            <div class="bg-white shadow-lg rounded-lg" style="width: 45rem !important;">
                                <div class="flex">
                                    <div>
                                        <img class="w-full rounded hidden md:block" src="https://tailwindcss.com/img/card-top.jpg" alt="Album Pic">
                                    </div>
                                    <div class="w-full p-8">
                                        <div class="flex justify-between">
                                            <div>
                                                <h3 class="text-2xl text-gray-700 font-medium">{{ $song->title }}</h3>
                                                <p class="text-sm text-gray-600 mt-1">{{ $song->artist }}</p>
                                            </div>
                                            <div class="text-red-lighter">
                                                <svg class="w-6 h-6 text-red" fill="redColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="mx-8 py-4">
                                            <div class="flex justify-between text-sm text-gray-600">
                                                <audio controls class="w-full">
                                                    <source src="{{ route('music.stream', ['filename' => $song->file_path]) }}" type="audio/mpeg">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}





                    <div class="container mx-auto mt-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                            @foreach($songs as $song)
                            <div class="relative p-4 bg-gray-300 bg-white rounded-lg shadow-md">
                                <div class="mb-4">
                                    <div class="flex justify-between items-center"> <!-- Thêm 'items-center' để căn giữa theo chiều dọc -->
                                        <div>
                                            <h3 class="text-2xl text-black font-medium">{{ $song->title }}</h3>
                                            <p class="text-sm text-gray-600 mt-1">{{ $song->artist }}</p>
                                        </div>
                                        <div class="text-red-lighter absolute top-0 right-0 p-2">
                                            <img src="{{ asset('images/icon.png') }}" alt="Logo" class="rounded-lg w-12 h-12"> <!-- Thêm thẻ img cho logo -->
                                        </div>
                                    </div>
                                </div>
                                <audio controls class="w-full">
                                    <source src="{{ route('music.stream', ['filename' => $song->file_path]) }}" type="audio/mpeg">
                                </audio>
                                
                                <div class="flex justify-between items-center mt-2">
                                    <span class="text-sm text-gray-600 text-left px-2 py-1 rounded-full bg-gray-400 text-white">Tag: {{ $song->genre }}</span>
                                    <p class="text-sm text-gray-600 text-right"><b>Upload by:</b> {{ $song->user->name }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    


                    


                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
