@extends('app')

@section('title', 'Search Movies')

@section('content')
    <form action="{{ route('movies.search') }}" method="POST" autocomplete="off">
        @csrf
        <label for="title">Movie Title:</label>
        <input type="text" id="title" name="title" required>
        <button type="submit">Search</button>
    </form>
@endsection
