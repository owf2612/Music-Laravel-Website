<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-lg font-medium ">Music Sound</h2>
                    <div class="flex justify-end mb-4 mt-2 p-2">
                        <form action="{{ route('music.search') }}" method="GET">
                            @csrf
                            <input type="text" name="query" class="text-gray-600 border rounded-full p-2" placeholder="Search for songs">
                        </form>
                    </div>      
                    <div class="container mx-auto mt-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                            @foreach($songs as $song)
                            <div class="relative bg-gray-300 bg-white rounded-lg shadow-md overflow-hidden">
                                @if($song->image_paths)
                                    <img src="{{ route('music.image', ['filename' => json_decode($song->image_paths)[0]]) }}" alt="" class="w-full h-48 object-cover">
                                @endif
                                <div class="p-4">
                                    <div class="mb-4">
                                        <h3 class="text-2xl text-black font-medium">{{ $song->title }}</h3>
                                        <p class="text-sm text-gray-600 mt-1">{{ $song->artist }}</p>
                                    </div>
                                    <audio controls class="w-full mb-2 audio-player">
                                        <source src="{{ route('music.stream', ['filename' => $song->file_path]) }}" type="audio/mpeg">
                                    </audio>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="text-sm text-gray-600 text-left px-2 py-1 rounded-full bg-gray-400 text-white">Tag: {{ $song->genre }}</span>
                                        <p class="text-sm text-gray-600 text-right"><b>Upload by:</b> {{ $song->user->name }}</p>
                                    </div>
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
