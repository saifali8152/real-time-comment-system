<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;

class CommentsList extends Component
{
    public $comments;
    public $articleId;

    protected $listeners = [
        'commentSaved' => 'loadComments'
    ];

    public function mount($articleId)
    {
        $this->articleId = $articleId;
        $this->loadComments();
    }

    public function loadComments()
    {
        $this->comments = Comment::where('article_id', $this->articleId)
                            ->with('user')
                            ->get();
    }

    public function render()
    {
        return view('livewire.comments-list');
    }
}
