<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class CourseList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.course-list', [
            'courses' => Course::latest()->with('user')->paginate(9)
        ]);
    }
}
