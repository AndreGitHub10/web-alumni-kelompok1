 @extends('layouts.app')
@section('content')
               
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-caption d-md-block position bottom-50" style="background-color: rgba(0,0,0,0.5); margin-top:14%;">
        <h1><strong><font face="Cambria">Ikatan Alumni PJJ</font></strong></h1>
        <h2>Politeknik Elektronika Negeri Surabaya</h2>
      </div>
      <img src="https://www.swnsdigital.com/wp-content/uploads/2017/09/SWDEGREE.jpeg" class="d-block w-100" alt="..." style="max-height: 596px;">
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-md-block position bottom-50" style="background-color: rgba(0,0,0,0.5); margin-top:14%;">
        <h1><strong><font face="Cambria">Ikatan Alumni PJJ</font></strong></h1>
        <h2>Politeknik Elektronika Negeri Surabaya</h2>
      </div>
      <img src="https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg" class="d-block w-100" alt="..." style="max-height: 596px;">
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-md-block position bottom-50" style="background-color: rgba(0,0,0,0.5); margin-top:14%;">
        <h1><strong><font face="Cambria">Ikatan Alumni PJJ</font></strong></h1>
        <h2>Politeknik Elektronika Negeri Surabaya</h2>
      </div>
      <img src="https://beritapens.files.wordpress.com/2015/04/gambar_pens.jpg" class="d-block w-100" alt="..." style="max-height: 596px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
             
  <div class="row">
    <h1 class="mt-3">Berita Terbaru</h1>
    <hr>
    <div class="row">
      
        @foreach($berita as $brt)
       <!--  {{$brt->nama}}
        {{$brt->link}} -->
       <!--  <img src="{{ asset($brt->gambar) }}" style="height: 256px; width:100%"> -->
      <!--  <div class="row"> -->
          <div class="col-lg-6 col-md-6 mt-3">
          <div class="card" >
            <img src="{{ asset($brt->gambar) }}" class="card-img-top" style="height: 210px; object-fit: cover;">
            <div class="card-body">
              <p>{{$brt->nama}}</p>
              <a target="_blank" href="{{$brt->link}}" class="btn btn-primary">Lihat lebih jelas</a>
            </div>
          </div>
        </div>

        @endforeach
      </div>
    </div>
  </div>

</div>
<br>
<br>
@endsection