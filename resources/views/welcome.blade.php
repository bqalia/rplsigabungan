@extends('layouts.masterlayout')
@section('title','berandaku')
@section('content')

<x-alert>

</x-alert>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=" {{ asset:'image/'}}class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset: image/ " class="d-block w-100" alt="..."> 
    </div>
    <div class="carousel-item">
      <img src="{{" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.halodoc.com%2Fartikel%2Ftips-merawat-anak-kucing-munchkin%3Fsrsltid%3DAfmBOooZX_4YDAyYOE5zUthY1AZ3BJCIUyTfxdSrJa3dDDuhBdxMdcvL&psig=AOvVaw2P30RlwXgZppgbPeEVfuxb&ust=1759978308588000&source=images&cd=vfe&opi=89978449&ved=0CBUQjRxqFwoTCJi5yqHMk5ADFQAAAAAdAAAAABAu" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endsection