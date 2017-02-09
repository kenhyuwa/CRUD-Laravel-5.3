@extends('layouts.app')

@section('title', $title)

@section('content')
    <center>
    	<h1>{{ $title }}</h1>
    	<p>{{ $content }}</p>
        Kendaraan yang ada di kota <strong>{{ ucwords($kota->nama_kota) }}</strong> :
        <ul>
            @foreach($kota->kendaraans as $kendaraan)
                {{ strtoupper($kendaraan->nama_kendaraan) }} <br/>
            @endforeach
        </ul>
    </center>
@endsection