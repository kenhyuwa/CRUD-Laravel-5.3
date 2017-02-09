@extends('layouts.app')

@section('content')

<div class="panel panel-info">
	<div class="panel-heading">
		<center>
		<h1>
		CRUD Laravel 5.3
		</h1>
		</center>
	</div>
	<div class="panel-body">
		<a href="{{ URL('kendaraan/create') }}" class="btn btn-raised btn-primary pull-right">Tambah</a>
		<table class="table table-bordered table-hover ">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama Kendaraan</th>
					<th>Jenis Kendaraan</th>
					<th>Buatan</th>
					<th>Pemilik</th>
				</tr>
			</thead>
			<tbody>
				@php(
					$no = 1
					)
				@foreach ($kendaraans as $kendaraan)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $kendaraan->nama_kendaraan }}</td>
						<td>{{ $kendaraan->jenis_kendaraan }}</td>
						<td>{{ $kendaraan->buatan }}</td>
						<td>{{ $kendaraan->user->name }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@stop