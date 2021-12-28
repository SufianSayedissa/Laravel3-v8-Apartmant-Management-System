<?php

namespace App\Http\Livewire;

use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record, $comment, $content_id, $rate;
    public function mount($id)
    {
        $this->record = Content::findOrFail($id);
        $this->content_id = $this->record->id;
    }


    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput()
    {
        $this->comment = null;
        $this->rate = null;
        $this->content_id = null;
        $this->ip = null;
    }
    public function store()
    {
        $this->validate([
            'comment' => 'required|min:10',
            'rate' => 'required'
        ]);
           \App\Models\Review::create([
           'content_id'=>$this->content_id,
            'user_id'=>Auth::id(),
            'ip'=>$_SERVER['REMOTE_ADDR'],
            'rate'=>$this->rate,
            'comment'=>$this->comment
        ]);
        session()->flash('message', 'Comment Sent Successfully, Thanks.');
        $this->resetInput();
    }

}
