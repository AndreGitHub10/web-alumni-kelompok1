@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
  <a href="{{ url('/') }}" style="color:black;">Beranda > </a>
  <a href="{{ url('berita') }}" style="color:black;">Data Alumni > </a>
  <a href="#">Info Detail Alumni</a>
  <hr>
  <div class="card">
    <div class="row g-0">
      <div class="col-md-2">
          <img src="{{ asset($berita->gambar) }}" style="height: 256px; width:100%">
      </div>
      <div class="col-md-10">
        <h5 class="card-header">{{ $berita->nama }}</h5>
        <div class="card-body">
          <table>
            <tr>
              <td class="card-text">Link</td>
              <td class="card-text"> : {{ $berita->link }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
@endsection