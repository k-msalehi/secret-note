<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class Show extends Component
{
    public $noteId;

    public function render()
    {
        $note = Note::allowedToSee()->where('id', $this->noteId)->firstOrFail();
        $note->content = decrypt($note->content);
        return view('livewire.notes.show', [
            'note' => $note,
        ]);
    }

    public function mount($id)
    {
        $this->noteId = $id;
    }
}
