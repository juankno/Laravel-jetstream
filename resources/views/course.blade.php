@extends('layouts.web')

@section('content')

<div class="grid grid-cols-3 gap-4">
    <div class="bg-gray-200 col-span-1 p-8">
        <ul class="flex flex-col">
            <li class="font-medium text-sm text-gray-400 uppercase mb-4">
                Contenido
            </li>

            @foreach ($course->posts as $post)
            <li class="flex items-center text-gray-600 mt-2">
                {{ $post->name }}
                @if ($post->free)
                <span class="text-xs text-gray-500 font-semibold bg-gray-300 px-2 rounded-full ml-auto">Gratis</span>
                @endif
            </li>
            @endforeach
        </ul>
    </div>

    <div class="text-gray-700 col-span-2">
        <img src="{{ $course->image }}" alt="{{ $course->name }}">
        <h2 class="text-4xl">{{ $course->name }}</h2>
        <p>{{ $course->description }}</p>
        <div class="flex mt-3 py-2">
            <img src="{{ $course->user->avatar }}" alt="{{ $course->user->name }}" class="h-10 w-10 rounded-full mr-2">
            <div>
                <p class="text-gray-500 text-sm">{{ $course->user->name }}</p>
                <p class="text-gray-400 text-xs">{{ $course->created_at->diffForHumans() }}</p>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Últimos cursos</h1>
    <h2 class="text-xl text-gray-600">Formate online como profesional en tecnología</h2>
</div>


<livewire:course-list />
@endsection