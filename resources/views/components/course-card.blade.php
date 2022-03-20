<div class="max-w-sm bg-white shadow-lg rounded-ls px-4 py-6">
    <a href="{{ route('course', $course) }}">
        <img class="rounded-md mb-2" src="{{ $course->image }}" alt="{{ $course->name }}">
        <div class="px-6 py-4">
            <h1 class="font-bold text-xl mb-2 truncate" title="{{ $course->name }}" >{{ $course->name }}</h1>
            <h2 class="text-gray-700 text-base">
                {{ $course->excerpt }}
            </h2>
        </div> 
    </a>
    <div class="p-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>
    <div class="flex items-center">
        <img class="w-10 h-10 rounded-full mr-4" src="{{ $course->user->avatar }}" alt="Avatar of {{ $course->user->name }}">
        <div class="text-sm ml-4">
            <p class="text-gray-400 leading-none">{{ $course->user->name }}</p>
            <p class="text-gray-300">{{ $course->user->created_at->diffForHumans() }}</p>
        </div>
    </div>
</div>