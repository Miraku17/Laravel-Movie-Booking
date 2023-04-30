<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Models\Movie;

class MovieController extends Controller
{
    //

    public function index()
    {
        $data = Movie::get();

        return view('movie-list', compact('data'));
    }
    public function addBooking()
    {
        return view('add-booking');
    }
}
