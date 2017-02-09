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
    				<th>Kendaraan</th>
    				<th>Buatan</th>
                    <th>Pemilik</th>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach ( $kendaraans as $kendaraan )
    				<tr>
	    				<td>{{ $kendaraan->nama_kendaraan }}</td>
	    				<td>{{ $kendaraan->jenis_kendaraan }}</td>
                        <td>{{ $kendaraan->user->name }}</td>
	    			</tr>
    			@endforeach
    		</tbody>
    	</table>
	</center>
@endsection