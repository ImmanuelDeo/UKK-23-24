@extends('layouts.app')
  
@section('title', 'Kepegawaian')
  
@section('contents')
    <h1 class="mb-0">Ubah Data</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="title" class="form-control" placeholder="Nama" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">No.Telp</label>
                <input type="text" name="price" class="form-control" placeholder="No.Telp" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="product_code" class="form-control" placeholder="NIP" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Divisi</label>
                <input class="form-control" name="description" placeholder="Divisi" value="{{ $product->description }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Simpan</button>
            </div>
        </div>
    </form>
@endsection