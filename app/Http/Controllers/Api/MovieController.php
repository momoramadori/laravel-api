<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return response()->json([
            'success' => true,
            'count'=> $movies->count(),
            'data'=> $movies,
        ]);
    }

    public function best() {
        $movies = Movie::where('rating','>', 8)->get();
        return response()->json([
            'success' => true,
            'count'=> $movies->count(),
            'data'=> $movies,
        ]);
    }

    public function show($id) {
        $movie = Movie::find($id);
        if($movie) {
            return response()->json([
                'success' => true,
                'data'=> $movie,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error'=> 'Film non trovato!',
            ]);
        }
        
    }
}
