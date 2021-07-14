@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
	<h1 class="mt-3">Lowongan Pekerjaan</h1>
	@if (Auth::check())

	<a href="loker/create" class="btn btn-primary w-100"><i class="fa fa-plus-circle"></i>&nbsp; Tambah Lowongan Pekerjaan</a><br>

	@endif
	@foreach( $loker as $lkr)
	<br>
	<div class="card">

		<div class="row g-0">
			<div class="col-md-3">
				<img src="{{ asset($lkr->foto) }}" style="height: 156px; width:100%">
			</div>

			<div class="col-md-9">
				  <h5 class="card-header" >{{ $lkr->pekerjaan }}</h5>
				  <div class="card-body">
				    <h5 class="card-title">{{ $lkr->nama }}</h5>
				    <p class="card-text">{{ $lkr->alamat }}</p>	
					
					<div class="position-relative">
					<div class="position-absolute bottom-0 end-0">
					<tr>
						<td>
						<a href="{{ route('loker.show', ['loker' => $lkr->id]) }}" class="btn btn-primary"><i class="fa fa-info-circle"></i>&nbsp;Lihat Detail</a>
						</td>

						<td>
						@if (Auth::check())
						<a href="{{ route('loker.edit', ['loker' => $lkr->id]) }}" class="btn btn-info text-white"><i class="fa fa-edit"></i>&nbsp;Update</a>
						@endif
						</td>
						
						<td>
							<form method="post" name="formloker{{$lkr->id}}" action="{{ route('loker.destroy', ['loker' => $lkr->id]) }}">

							@csrf @method('DELETE')	
							</form>
							@if (Auth::check())							
								
				
							<button class="btn btn-danger" onclick="myFunction({{$lkr->id}})"><i class="fa fa-trash">
								</i>&nbsp;Hapus</button>
									<script>
									function myFunction(id) {
									  var txt;
									  var r = confirm("Apakah anda yakin untuk menghapus data loker ini ?");
									  if (r == true) {
									    document.forms['formloker'+id].submit();
									  } else {
									    txt = "You pressed Cancel!";
									  }
									}
									</script>

									@endif
						</td>
						</tr>
					</div>
					</div>		

		  		</div>
		  		</div>
		</div>
	</div>
	@endforeach
	<br>
</div>
<br>
<br>
@endsection