@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Update Data Mahasiswa</h1>

			<form enctype="multipart/form-data" method="post" action="{{ route('mahasiswa.update', ['mahasiswa' => $mahasiswa->id]) }}">

				
				@csrf @method('PUT')
			  <div class="mb-3">
			    <label for="nama" class="form-label">Nama</label>
			    <input value="{{ $mahasiswa->nama }}" name="nama" type="text" class="form-control" id="nama" >
			  </div>

			  <div class="mb-3">
			    <label for="nrp" class="form-label">Nrp</label>
			    <input value="{{ $mahasiswa->nrp }}" name="nrp" type="text" class="form-control" id="nrp">
			    
			  </div>

			  <div class="mb-3">
			    <label for="email" class="form-label">Email</label>
			    <input value="{{ $mahasiswa->email}}" name="email" type="email" class="form-control" id="email">
			    
			  </div>

			  <div class="mb-3">
			    <label for="telepon" class="form-label">Kontak Telepon</label>
			    <input value="{{ $mahasiswa->telepon}}" name="telepon" type="telepon" class="form-control" id="telepon">
			    
			  </div>

			  <div class="mb-3">
			    <label for="jurusan" class="form-label">Jurusan</label>
			    <input value="{{ $mahasiswa->jurusan }}" name="jurusan" type="text" class="form-control" id="jurusan">
			   
			  </div>

			  <div class="mb-3">
			    <label for="alamat" class="form-label">Alamat</label>
			    <input value="{{ $mahasiswa->alamat }}" name="alamat" type="text" class="form-control" id="alamat">
			  </div>

			  <div class="mb-3">
			    <label for="motivasi" class="form-label">Motivasi</label>
			    <input value="{{ $mahasiswa->motivasi }}" name="motivasi" type="text" class="form-control" id="motivasi">
			  </div>

			  <div class="mb-3">
			    <label for="pekerjaan" class="form-label">Pekerjaan</label>
			    <input value="{{ $mahasiswa->pekerjaan }}" name="pekerjaan" type="text" class="form-control" id="pekerjaan">
			  </div>

			  <div class="mb-3">
			    <label for="tempatPekerjaan" class="form-label">Tempat Pekerjaan</label>
			    <input value="{{ $mahasiswa->tempatPekerjaan }}" name="tempatPekerjaan" type="text" class="form-control" id="tempatPekerjaan">
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			  <button onclick="window.href.replace('{{route('mahasiswa')}}')" class="btn">Cancel</button>
			</form>
		</div>
	</div>
</div>
<br>
<br>
@endsection