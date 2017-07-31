@extends('layouts.master')
@section('isi')


	@foreach ($ortu as $data ) <hr>
		Nama ibu : {{$data->nama_ayah}} <br>
		Nama ayah: {{$data->nama_ibu}} <br>
		Umur ibu : {{$data->Umur_ibu}} <br>
		Umur ayah {{$data->umur_ayah}}<br>
		Nama Anak :
		@foreach($data->siswa as $key)
		<li>{{$key->nama}}</li>
	@endforeach	
		<hr>
		@endforeach
		

		@endsection