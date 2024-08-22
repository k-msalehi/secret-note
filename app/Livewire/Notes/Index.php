<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        // dd(Note::all());
        return view('livewire.notes.index', [
            'notes' => Note::allowedToSee()->latest()->paginate(50),
        ]);
    }

    public function paginationView()
    {
        return 'vendor.livewire.simple-bootstrap';
    }
}
