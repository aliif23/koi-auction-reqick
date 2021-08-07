@section('content')
@extends('layouts.adminlte')


<form action="/admin/details/koidfilter/{{$koidfilter->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <p class="text-success border-0">{{session('mssg')}}</p>
            <label for="nama" class="form-label">Nama Rotary Filter : </label>
            <input type="text" name="nama" class="form-control" value="{{$koidfilter->nama}}">
            <label for="size" class="form-label mt-3">Ukuran : </label>
            <input type="text" name="size" class="form-control" value="{{$koidfilter->size}}">
            <label for="price" class="form-label mt-3">Harga : </label>
            <input type="text" name="price" class="form-control" value="{{$koidfilter->price}}">
            <label for="desc" class="form-label">Deskripsi : </label>
            <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{$koidfilter->desc}}</textarea>
            <label class="form-label" for="gambar">Ganti Gambar : </label>
            <input class="form-control" type="file" name="gambar">
        </div>
        <div class="col-6 text-center">
            <img class="img-fluid rounded" style="width: 370px" src="/img/products/koidfilter/{{$koidfilter->gambar}}" alt="">
        </div>
    </div>
    <button class="btn btn-outline-success mt-4" type="submit">Update Data</button>
    <a class="btn btn-primary mt-4" href="/admin/tables/koidfilter">Back to Tables</a>
</form>


@endsection