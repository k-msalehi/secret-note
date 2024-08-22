<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class Form extends Component
{
    use WireToast;

    public $title;
    public $content;
    public $head;
    public $onlyAuthor;

    #[Locked]
    public $noteAddr = 0;
    #[Locked]
    public $decrypteContent = false;

    public $noteId;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'onlyAuthor' => 'nullable|boolean',

    ];

    public function render()
    {
        if ($this->noteId) {
            $this->noteAddr = route('notes.show', $this->noteId);
        }
        return view('livewire.notes.form');
    }

    public function rendering()
    {
        if ($this->decrypteContent) {
            $this->content = decrypt($this->content);
            $this->decrypteContent = false;
        }
    }

    public function mount($noteId = null)
    {
        if ($noteId) {
            $note = Note::findOrFail($noteId);
            $this->noteId = $note->id;
            $this->title = $note->title;
            $this->content = $note->content;
        }
    }

    public function save()
    {

        $this->validate();
        $note = Note::updateOrCreate(
            ['id' => $this->noteId],
            [
                'title' => $this->title,
                'content' => encrypt($this->content),
                'only_author' => $this->onlyAuthor ?? false,
                'user_id' => auth()->id(),
            ]
        );
        if ($note->wasRecentlyCreated) {
            $this->head = 'ویرایش یادداشت';
            toast()
                ->success('یادداشت با موفقیت ایجاد شد')
                ->push();
        } else {
            toast()
                ->success('یادداشت با موفقیت بروزرسانی شد')
                ->push();
        }
        $this->noteId = $note->id;
    }
}
