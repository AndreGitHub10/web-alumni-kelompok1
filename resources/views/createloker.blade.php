@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Tambah Lowongan Pekerjaan</h1>
			
			<form method="post" enctype="multipart/form-data" action="{{ route('loker') }}">
				@csrf

			  <div class="mb-3">
			    <label for="foto" class="form-label">Masukkan Logo</label>
			    <input name="foto" type="file" class="form-control" id="foto" >
			  </div>

			  <div class="mb-3">
			    <label for="fotoloker" class="form-label">Masukkan Gambar Loker</label>
			    <input name="fotoloker" type="file" class="form-control" id="fotoloker" >
			  </div>

			  <div class="mb-3">
			    <label for="nama" class="form-label">Nama Perusahaan</label>
			    <input name="nama" type="text" class="form-control" id="nama" >
			  </div>

			  <div class="mb-3">
			    <label for="pekerjaan" class="form-label">Pekerjaan</label>
			    <input name="pekerjaan" type="text" class="form-control" id="pekerjaan">
			    
			  </div>

			  <div class="mb-3">
			    <label for="email" class="form-label">Email</label>
			    <input name="email" type="email" class="form-control" id="email">
			    
			  </div>

			  <div class="mb-3">
			    <label for="alamat" class="form-label">Alamat</label>
			    <input name="alamat" type="text" class="form-control" id="alamat">
			   
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
<br>
<br>
@endsection