@extends('layouts.app')
@section('content')
<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Daftar Alumni Mahasiswa</h1>
			@if (Auth::check())
			<a href="mahasiswa/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Tambah Data Mahasiswa</a>
			@endif

			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">NRP</th>
					<th scope="col">Email</th>
					<th scope="col">Jurusan</th>
					<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach( $mahasiswa as $mhs)
					<tr>
						<th scope="row">{{ $loop->iteration }}</th>
						<td>{{ $mhs->nama }}</td>
						<td>{{ $mhs->nrp }}</td>
						<td>{{ $mhs->email }}</td>
						<td>{{ $mhs->jurusan }}</td>
						<td>
								
							<a href="{{ route('mahasiswa.show', ['mahasiswa' => $mhs->id]) }}">
								<button class="btn btn-primary"><i class="fa fa-info-circle"></i>&nbsp;Lihat</button></a>
								
						</td>
						<td>
								@if (Auth::check())
							<a href="{{ route('mahasiswa.edit', ['mahasiswa' => $mhs->id]) }}">
								<button class="btn btn-info text-white"><i class="fa fa-edit"></i>&nbsp;Update</button></a>
								@endif
						</td>
						<td>
							<form method="post" name="formku" action="{{ route('mahasiswa.destroy', ['mahasiswa' => $mhs->id]) }}">

							@csrf @method('DELETE')	
							</form>
							@if (Auth::check())							
								
				
							<button class="btn btn-danger" onclick="myFunction()"><i class="fa fa-trash">
								</i>&nbsp;Hapus</button>
									<script>
									function myFunction() {
									  var txt;
									  var r = confirm("Apakah anda yakin untuk menghapus data mahasiswa ini ?");
									  if (r == true) {
									    document.formku.submit();
									  } else {
									    txt = "You pressed Cancel!";
									  }
									}
									</script>

									@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<br>
<br>
@endsection