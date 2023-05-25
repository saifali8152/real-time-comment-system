<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Livewire\Livewire;
use App\Models\User;
use App\Models\Article;
use App\Models\Comment;


class CommentTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_a_comment()
    {
        $user = User::factory()->create();
        $article = Article::factory()->create();
        $this->assertDatabaseHas('articles', ['id' => $article->id]);
        Livewire::actingAs($user)
        ->test('comment-form', ['articleId' => $article->id])
        ->set('body', 'This is a comment')
        ->call('saveComment');

        $this->assertDatabaseHas('comments', ['body' => 'This is a comment']);
    }

    public function test_guest_cannot_create_a_comment()
    {
        $article = Article::factory()->create();
        $this->assertDatabaseHas('articles', ['id' => $article->id]);
        Livewire::test('comment-form', ['articleId' => $article->id])
            ->set('body', 'This is a comment')
            ->call('saveComment')
            ->assertForbidden();

        $this->assertDatabaseMissing('comments', ['body' => 'This is a comment']);
    }


    // ... more tests ...
}
