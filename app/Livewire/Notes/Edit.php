<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class Edit extends Component
{
    public $noteId;

    public function render()
    {
        return view('livewire.notes.edit');
    }

    public function mount($id)
    {
        $this->noteId = $id;
    }
}
