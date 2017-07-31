@extends('layouts.master')
@section('isi')
	 @foreach {{$ortu as $key}}
		echo {{$key->nama_ayah;}}
		echo " dengan ";
		echo $key->nama_ibu;
		echo " mempunyai anak ";
		foreach ($key->siswa as $data) {
		echo "<li>".$data->nama."</li>";
		echo "<hr>";

@endsection