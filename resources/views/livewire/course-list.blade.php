<div>
    <div class="grid grid-cols-3 gap-4 mt-8">
        @foreach ($courses as $course)
        <x-course-card :course="$course" />
        @endforeach
    </div>

    <div class="bg-white px-4 py-3   justify-between border-t border-gray-200 sm:px-6">
        {{ $courses->links() }}
    </div>
</div>