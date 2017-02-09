@extends('layouts.app')

@section('title', $title)

@section('sidebar')
    @parent
    <li>PHP</li>
@endsection

@section('content')
    <center>
    	<h1>{{ $title }}</h1>
    	<p>{{ $content }}</p>
        <p>Username : {{ $profile->user->name }}</p>
        <p>Email : {{ $profile->user->email }}</p>
    </center>
@endsection