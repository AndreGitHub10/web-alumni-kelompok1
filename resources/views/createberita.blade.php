@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Tambah berita Acara</h1>
			
			<form method="post" enctype="multipart/form-data" action="{{ route('berita') }}">
				@csrf

			  <div class="mb-3">
			    <label for="gambar" class="form-label">Masukkan Gambar Berita</label>
			    <input name="gambar" type="file" class="form-control" id="gambar" >
			  </div>

			  <div class="mb-3">
			    <label for="nama" class="form-label">Nama Berita</label>
			    <input name="nama" type="text" class="form-control" id="nama" >
			  </div>

			  <div class="mb-3">
			    <label for="link" class="form-label">Link</label>
			    <input name="link" type="text" class="form-control" id="link">
			    
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
<br>
<br>
@endsection