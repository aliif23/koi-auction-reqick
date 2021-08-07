@section('content')
@extends('layouts.app')

<div class="display-5 text-center text-danger mb-5">
    Available Koi Foods
</div>
<div class="row justify-content-center">
    @foreach($koifoods as $koifood)
    <div class="card mb-3 col-12 col-md-7 mx-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/img/products/koifood/{{$koifood->gambar}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title text-danger text-uppercase">{{$koifood->nama}}</h5>
                <h6 class="card-text">Size : {{$koifood->size}}</h6>
                <p class="card-text">{{$koifood->desc}}</p>
                <p class="text-danger fw-bold">Price : Rp. {{$koifood->price}}</p>
                </div> 
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection