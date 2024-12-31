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



}
