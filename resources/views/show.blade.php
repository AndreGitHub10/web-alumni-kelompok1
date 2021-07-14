@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
  <a href="{{ url('/') }}" style="color:black;">Beranda > </a>
  <a href="{{ url('mahasiswa') }}" style="color:black;">Data Alumni > </a>
  <a href="#">Info Detail Alumni</a>
  <hr>
  <div class="card">
    <div class="row g-0">
      <div class="col-md-2">
          <img src="{{ asset($mahasiswa->gambar) }}" style="height: 256px; width:100%">
      </div>
      <div class="col-md-10">
        <h5 class="card-header">{{ $mahasiswa->nama }}</h5>
        <div class="card-body">
          <table>
            <tr>
              <td class="card-text">NRP</td>
              <td class="card-text"> : {{ $mahasiswa->nrp }}</td>
            </tr>
            <tr>
              <td class="card-text">Jurusan</td>
              <td class="card-text"> : {{ $mahasiswa->jurusan }}</td>
            </tr>
            <tr>
              <td class="card-text">Email</td>
              <td class="card-text"> : {{ $mahasiswa->email }}</td>
            </tr>
            <tr>
              <td class="card-text">Kontak</td>
              <td class="card-text"> : {{ $mahasiswa->telepon }}</td>
            </tr>
            <tr>
              <td class="card-text">Alamat</td>
              <td class="card-text"> : {{ $mahasiswa->alamat }}</td>
            </tr>
            <tr>
              <td class="card-text">Motivasi</td>
              <td class="card-text"> : {{ $mahasiswa->motivasi }}</td>
            </tr>
            <tr>
              <td class="card-text">Pekerjaan</td>
              <td class="card-text"> : {{ $mahasiswa->pekerjaan }}</td>
            </tr>
            <tr>
              <td class="card-text">Tempat Pekerjaan</td>
              <td class="card-text"> : {{ $mahasiswa->tempatPekerjaan }}</td>
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