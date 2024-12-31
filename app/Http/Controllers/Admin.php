<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;
use App\Models\Showtime;
use App\Models\User;

class Admin extends Controller
{
    public function createMovie(Request $request)
    {
        $movie = Movie::create($request->only(['title', 'description', 'genre']));
        return response()->json(['message' => 'Movie created successfully', 'movie' => $movie], 201);
    }
    public function updateMovie(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->only(['title', 'description', 'genre']));
        return response()->json(['message' => 'Movie updated successfully', 'movie' => $movie]);
    }

    public function deleteMovie($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return response()->json(['message' => 'Movie deleted successfully']);
    }
    public function createShowtime(Request $request)
    {
        $showtime = Showtime::create($request->only(['movie_id', 'date', 'time', 'capacity']));
        return response()->json(['message' => 'Showtime created successfully', 'showtime' => $showtime], 201);
    }



}
