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
		<a href="{{ URL('kendaraan') }}" class="btn btn-raised btn-danger pull-left">Kembali</a>
		{{-- part alert --}}
		@if (Session::has('after_save'))
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-dismissible alert-{{ Session::get('after_save.alert') }}">
					  <button type="button" class="close" data-dismiss="alert">×</button>
					  <strong>{{ Session::get('after_save.title') }}</strong>
					  <a href="javascript:void(0)" class="alert-link">{{ Session::get('after_save.text-1') }}</a> {{ Session::get('after_save.text-2') }}
					</div>
				</div>
			</div>
		@endif
		{{-- end part alert --}}
		<div class="row">
			<div class="col-md-12"><hr>
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form class="form-horizontal" action="{{ URL('kendaraan/store') }}" method="POST">
					{{ csrf_field() }}
					  <fieldset>
					    <legend>FORM TAMBAH DATA KENDARAAN</legend>
						    <div class="form-group label-floating">
							  <label class="control-label" for="focusedInput2">Nama Kendaraan</label>
							  <input class="form-control" id="focusedInput2" type="text" name="nama_kendaraan">
							  <p class="help-block">Masukan data kendaraan dengan benar.</p>
							</div>
							<div class="form-group label-floating">
							  <label class="control-label" for="focusedInput2">Jenis Kendaraan</label>
							  <input class="form-control" id="focusedInput2" type="text" name="jenis_kendaraan">
							  <p class="help-block">Masukan data kendaraan dengan benar.</p>
							</div>
							<div class="form-group label-floating">
							  <label class="control-label" for="focusedInput2">Made In</label>
							  <input class="form-control" id="focusedInput2" type="text" name="made_in">
							  <p class="help-block">Masukan data kendaraan dengan benar.</p>
							</div>
							<div class="form-group label-floating">
							  <label class="control-label" for="select111">Nama Pemilik</label>
							  <div class="col-md-12">
						        <select id="select111" class="form-control" name="pemilik">
						          <option value=""></option>
						          {{-- loop all users as pemilik --}}
						          @foreach ($users as $pemilik)
						          	<option value="{{ $pemilik->id }}">{{ strtoupper($pemilik->name) }}</option>
						          @endforeach
						          {{-- end loop --}}
						        </select>
						      </div>
							</div>
							<div class="form-group">
						      <div class="col-md-12">
						        <button type="submit" class="btn btn-raised btn-primary pull-right">Submit</button>
						        <button type="reset" class="btn btn-raised btn-warning pull-right">Reset</button>
						      </div>
						    </div>
						</fieldset>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>
</div>

@stop