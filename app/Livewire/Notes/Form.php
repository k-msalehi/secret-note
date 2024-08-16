<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class Form extends Component
{
    use WireToast;

    public $title;
    public $content;

    protected $noteId;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.notes.form')
            ->with([
                'head' => $this->noteId ? 'ویرایش یادداشت' : 'افزودن یادداشت',
            ])
            ->layoutData([
                'title' => 'افزودن یادداشت',
            ]);;
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
    public function updatedTitle()
    {
        $this->validateOnly('title', [
            'title' => 'required|string|max:255',
        ]);
    }
    public function save()
    {
        $this->validate();
        $note = Note::updateOrCreate(
            ['id' => $this->noteId],
            [
                'title' => $this->title,
                'content' => $this->content,
                'user_id' => auth()->id(),
            ]
        );
        if ($note->wasRecentlyCreated) {
            toast()
                ->success('یادداشت با موفقیت ایجاد شد')
                ->push();
        } else {
            toast()
                ->success('یادداشت با موفقیت بروزرسانی شد')
                ->push();
        }
        $this->reset(['title', 'content']);
    }
}
