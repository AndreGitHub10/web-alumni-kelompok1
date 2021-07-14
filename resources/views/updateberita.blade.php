@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Update Data Berita</h1>
			
			<form enctype="multipart/form-data" method="post" action="{{ route('berita.update', ['beritum' => $berita->id]) }}">

				@csrf @method('PUT')

				<div class="mb-3">
			    <label for="gambar" class="form-label">Masukkan Gambar</label>
			    <input name="gambar" type="file" class="form-control" id="gambar" >
			  </div>
			  
			  <div class="mb-3">
			    <label for="nama" class="form-label">Nama</label>
			    <input value="{{ $berita->nama }}" name="nama" type="text" class="form-control" id="nama" >
			  </div>

			  <div class="mb-3">
			    <label for="link" class="form-label">Link</label>
			    <input value="{{ $berita->link }}" name="link" type="text" class="form-control" id="link">
			    
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			  <button onclick="window.href.replace('{{route('berita')}}')" class="btn">Cancel</button>
			</form>
		</div>
	</div>
</div>
<br>
<br>
@endsection