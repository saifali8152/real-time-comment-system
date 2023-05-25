<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;

class CommentForm extends Component
{
    public $body;
    public $articleId;

    public function saveComment()
    {
        
        if (!auth()->check()) {
            abort(403, 'Unauthorized');
        }

        $this->validate([
            'body' => 'required'
        ]);

        Comment::create([
            'body' => $this->body,
            'user_id' => auth()->id(),
            'article_id' => $this->articleId
        ]);

        $this->reset('body');
        $this->emit('commentSaved');
    }

    public function render()
    {
        return view('livewire.comment-form');
    }
}
