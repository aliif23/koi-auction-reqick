@section('content')
@extends('layouts.app')

<div class="display-5 text-center text-danger mb-5">
    Available Koi Filters
</div>
<div class="row justify-content-center">
    @foreach($koifilters as $koifilter)
    <div class="card mb-3 col-12 col-md-7 mx-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/img/products/koifilter/{{$koifilter->gambar}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title text-danger text-uppercase">{{$koifilter->nama}}</h5>
                <h6 class="card-text">Size : {{$koifilter->size}}</h6>
                <p class="card-text">{{$koifilter->desc}}</p>
                <p class="card-text text-danger">Price : Rp. {{$koifilter->price}}</p> 
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
    
@endsection