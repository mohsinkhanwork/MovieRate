<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use illuminate\Support\Facades\Auth;

class RatingComponent extends Component
{
    public $movie;
    public $rating;
    public $comment;

    public function mount($movie)
    {
        $this->movie = $movie;
        $this->rating = $movie->rating;
    }

    public function submit()
    {
        $this->validate([
            'rating' => 'required|integer|min:1|max:10',
            'comment' => 'required',
        ]);

        $user_id = Auth::id();

        if(!is_null($user_id)) {
            Comment::create([
                'comment' => $this->comment,
                'user_id' => $user_id,
                'movie_id' => $this->movie->id,
                'rating' => $this->rating,
            ]);

            $this->movie = $this->movie->fresh(['comments']);
            $this->updateMovieRating();

            $this->reset(['rating', 'comment']);

        }
    }

    public function updateMovieRating()
    {
        $this->movie->update([
            'rating' => $this->movie->comments()->avg('rating')
        ]);
    }

    public function render()
    {
        return view('livewire.rating-component', [
            'comments' => $this->movie->comments()->latest()->get()
        ]);
    }

}
