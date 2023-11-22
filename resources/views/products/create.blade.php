@extends('layouts.app')
  
@section('title', 'Kepegawaian')
  
@section('contents')
    <h1 class="mb-0">Tambah Pegawai</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="No.Telp">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="NIP">
            </div>
            <div class="col">
                <input class="form-control" name="description" placeholder="Divisi">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>
@endsection