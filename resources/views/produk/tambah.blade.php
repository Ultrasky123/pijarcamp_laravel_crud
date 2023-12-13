@extends('app')
 
@section('content')
    <h1 class="mb-0">Tambah Produk</h1>
    <hr />
    <form action="{{ route('produk.store') }}" method="POST">
     @csrf   
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_produk" class="form-control" placeholder="nama_produk">
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="harga">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="keterangan" class="form-control" placeholder="keterangan">
            </div>
            <div class="col">
                <input class="form-control" name="jumlah" placeholder="jumlah"></input>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection