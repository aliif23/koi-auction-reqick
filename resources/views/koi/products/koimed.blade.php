@section('content')
@extends('layouts.app')

<div class="display-5 text-center text-danger mb-5">
    Available Koi Medicines
</div>
<div class="row justify-content-center">
    @foreach($koimeds as $koimed)
    <div class="card mb-3 col-12 col-md-7 mx-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/img/products/koimed/{{$koimed->gambar}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title text-danger text-uppercase">{{$koimed->nama}}</h5>
                <h6 class="card-text">Size : {{$koimed->size}}</h6>
                <p class="card-text">{{$koimed->desc}}</p>
                <p class="text-danger fw-bold">Price : Rp. {{$koimed->price}}</p>
                </div> 
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection