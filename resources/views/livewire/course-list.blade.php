<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
    <div class="bg-white shadow-lg rounded-ls px-4 py-6 text-center">
        <a href="#">
            <img src="{{ $course->image }}" alt="{{ $course->name }}" class="rounded-md mb-2">

            <h1 class="text-lg text-gray-600  truncate uppercase">{{ $course->name }}</h1>
            <h3 class="text-md text-gray-500 text-left">{{ $course->excerpt }}</h3>
            
            <img src="{{ $course->user->avatar }}" alt="{{ $course->user->name }}" class="rounded-full mt-4 mx-auto h-16 w-16">
        </a>
    </div>
    @endforeach
</div>