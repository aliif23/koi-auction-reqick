@section('content')
@extends('layouts.app')

<div class="display-5 text-center text-danger mb-5">
    Available Rotary Drum Filters 
</div>
<div class="row justify-content-center">
    @foreach($koidfilters as $koidfilter)
    <div class="card mb-3 col-12 col-md-7 mx-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/img/products/koidfilter/{{$koidfilter->gambar}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title text-danger text-uppercase">{{$koidfilter->nama}}</h5>
                <h6 class="card-text">Size : {{$koidfilter->size}}</h6>
                <p class="card-text">{{$koidfilter->desc}}</p>
                <p class="text-danger fw-bold">Price : Rp. {{$koidfilter->price}}</p> 
                </div> 
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection