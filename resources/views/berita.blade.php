@extends('layouts.app')
@section('content')
@if (Auth::check())
<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Daftar Berita</h1>
			@if (Auth::check())
			<a href="berita/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Tambah Data Berita</a>
			@endif

			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">Link</th>
					<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach( $berita as $brt)
					<tr>
						<th scope="row">{{ $loop->iteration }}</th>
						<td>{{ $brt->nama }}</td>
						<td> <p class="text-truncate" style="width: 180px;">{{ $brt->link }}</p></td>
						
						<!-- <td>
								
							<a href="{{ route('berita.show', ['berita' => $brt->id]) }}">
								<button class="btn btn-primary"><i class="fa fa-info-circle"></i>&nbsp;Lihat</button></a>
								
						</td> -->
						<td>
								
							<a href="{{ route('berita.edit', ['beritum' => $brt->id]) }}">
								<button class="btn btn-info text-white"><i class="fa fa-edit"></i>&nbsp;Update</button></a>
							</td>
								
						<td>
							<form method="post" name="formberita{{$brt->id}}" action="{{ route('berita.destroy', ['beritum' => $brt->id]) }}">

							@csrf @method('DELETE')	
							</form>
							@if (Auth::check())							
								
				
							<button class="btn btn-danger" onclick="myFunction({{$brt->id}})"><i class="fa fa-trash">
								</i>&nbsp;Hapus</button>
									<script>
									function myFunction(id) {
									  var txt;
									  var r = confirm("Apakah anda yakin untuk menghapus data berita ini ?");
									  if (r == true) {
									    document.forms['formberita'+id].submit();
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
@endif
@endsection