@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Update Lowongan Pekerjaan</h1>
			
			<form enctype="multipart/form-data" method="post" action="{{ route('loker.update', ['loker' => $loker->id]) }}">

				@csrf @method('PUT')

				<div class="mb-3">
			    <label for="foto" class="form-label">Masukkan Logo</label>
			    <input name="foto" type="file" class="form-control" id="foto" >
			  </div>
			  
			  <div class="mb-3">
			    <label for="nama" class="form-label">Nama Perusahaan</label>
			    <input value="{{ $loker->nama }}" name="nama" type="text" class="form-control" id="nama" >
			  </div>

			  <div class="mb-3">
			    <label for="pekerjaan" class="form-label">Pekerjaan</label>
			    <input value="{{ $loker->pekerjaan }}" name="pekerjaan" type="text" class="form-control" id="pekerjaan">
			    
			  </div>

			  <div class="mb-3">
			    <label for="email" class="form-label">Email</label>
			    <input value="{{ $loker->email }}" name="email" type="email" class="form-control" id="email">
			    
			  </div>

			  <div class="mb-3">
			    <label for="alamat" class="form-label">Alamat</label>
			    <input value="{{ $loker->alamat }}" name="alamat" type="text" class="form-control" id="alamat">
			   
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			  <button onclick="window.href.replace('{{route('loker')}}')" class="btn">Cancel</button>
			</form>
		</div>
	</div>
</div>
<br>
<br>
@endsection