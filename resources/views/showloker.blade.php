@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h1><strong>{{ $lkr->nama }}</strong></h1>
      </div>
    </div>
    <p>
      <a href="{{ url('/') }}" style="color:black;">Beranda > </a>
      <a href="{{ route('loker') }}" style="color:black;">Lowongan > </a>
      <a href="#">Lihat Detail</a>
    </p>
    <hr>
  </div>
  <br>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="col-md-3">
        <img src="{{ asset($lkr->fotoloker) }}" style="height: 200%; width:250%">
      </div>
    </div>
  </div>
</div>
<br>
<br>
@endsection