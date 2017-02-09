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
		<h3>Nama : {{ $name }}</h3>
        Hak akses :
        <ul>
            @foreach($users->roles as $role)
                {{ strtoupper($role->nama_role) }} <br/>
            @endforeach
        </ul>
    </center>
@endsection