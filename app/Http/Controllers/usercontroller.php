<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;
use App\Models\Showtime;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class usercontroller extends Controller
{
    public function listOfMovieShowtime($date)
{
    $movie = DB::table('movie')
        ->join('showtime', 'movie.id', '=', 'showtime.movie_id')
        ->where('showtime.date', $date)
        ->select(
            'movie.id as movie_id',
            'movie.title as Movie_Title',
            'movie.description as Description',
            'showtime.id as ShowID',
            'showtime.firsttime as Time1',
            'showtime.secondtime as Time2',
            'showtime.capacity as Capacity',
            'showtime.price as Price'
        )
        ->get();

    return response()->json(['movies' => $movie]);
}


}
