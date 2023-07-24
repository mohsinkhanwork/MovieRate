<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Movie;
use App\Models\User;
use Livewire\Livewire;

class MovieTest extends TestCase
{
   use RefreshDatabase;

    /** @test */

    public function a_movie_can_be_added()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->post('/movies', [
            'title' => 'Test Movie',
            'description' => 'Test Description',
            'rating' => 5,
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('movies', [
            'title' => 'Test Movie',
            'description' => 'Test Description',
            'rating' => 5,
        ]);
    }

    /** @test */
    public function a_movie_can_be_rated()
    {
        $user = User::factory()->create();
        $movie = Movie::factory()->create();

        $this->actingAs($user);

        Livewire::test('rating-component', ['movie' => $movie])
            ->set('rating', 5)
            ->set('comment', 'Test Comment')
            ->call('submit');

        $this->assertDatabaseHas('comments', [
            'comment' => 'Test Comment',
            'rating' => 5,
            'user_id' => $user->id,
            'movie_id' => $movie->id,
        ]);
    }
}
