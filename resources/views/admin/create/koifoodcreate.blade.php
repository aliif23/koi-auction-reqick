@section('content')
@extends('layouts.adminlte')

<h3 class="">Create a New Koi Food Data</h3>

<form action="/admin/create/newkoifood" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nama" id="nama" class="form-label">Nama Makanan Koi : </label>
    <input type="text" class="form-control" name="nama" required>
    <label for="price" id="price" class="form-label mt-3">Harga Makanan Koi : </label>
    <input type="text" class="form-control" name="price" required>
    <label for="size" id="size" class="form-label mt-3">Ukuran Makanan  Koi : </label>
    <input type="text" class="form-control" name="size" required>
    <label for="desc" class="form-label">Deskripsi Makanan Koi : </label>
    <textarea name="desc" id="" cols="30" rows="10" class="form-control my-2"></textarea>
    <label for="gambar" class="form-label mt-3">Gambar Makanan Koi : </label>
    <input type="file" class="form-control" name="gambar" required>
    <button class="btn btn-success mt-3" type="submit">Add Data</button>
    <button class="btn btn-danger mt-3 mx-2" type="reset">Reset</button>
    

</form>

<a href="/admin/tables/koifood"><button class="btn btn-outline-primary mt-4">Back To Tables</button></a>


@endsection