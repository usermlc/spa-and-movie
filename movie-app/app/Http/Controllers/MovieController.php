<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\MovieResultMail;

class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index');
    }

    public function search(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $response = Http::get('http://www.omdbapi.com/', [
            'apikey' => env('OMDB_API_KEY'),
            't' => $request->input('title'),
        ]);

        if ($response->successful()) {
            $movie = $response->json();

            if (isset($movie['Error'])) {
                return back()->with('error', $movie['Error']);
            }

            session(['movieDetails' => $movie]);

            return view('movies.result', compact('movie'));
        }

        return back()->with('error', 'Could not fetch movie details.');
    }

    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        $email = $validated['email'];

        $movieDetails = session('movieDetails');

        if (!$movieDetails) {
            return back()->with('error', 'Movie details are not available in the session.');
        }

        Mail::to($email)->send(new MovieResultMail($movieDetails));

        return redirect()->route('movies.index')->with('success', 'Movie details sent to ' . $email);
    }
}

