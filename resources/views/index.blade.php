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
    	<table>
    		<thead>
    			<tr>
    				<th>Username</th>
    				<th>Email</th>
    				<th>Nama Lengkap</th>
    				<th>Jenis Kelamin</th>
    				<th>Alamat</th>
    				<th>No. Telp</th>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach ( $users as $user )
    				<tr>
	    				<td>{{ $user->name }}</td>
	    				<td>{{ $user->email }}</td>
	    				<td>{{ $user->profile->nama }}</td>
	    				<td>{{ $user->profile->jenis_kelamin }}</td>
	    				<td>{{ $user->profile->alamat }}</td>
	    				<td>{{ $user->profile->no_telp }}</td>
	    			</tr>
    			@endforeach
    		</tbody>
    	</table>
	</center>
@endsection