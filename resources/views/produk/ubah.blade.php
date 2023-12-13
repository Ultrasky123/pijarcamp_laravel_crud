@extends('app')
 
@section('content')
    <h1 class="mb-0">Edit Produk</h1>
    <hr />
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">nama_produk</label>
                <input type="text" name="nama_produk" class="form-control" placeholder="nama_produk" value="{{ $produk->nama_produk }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">harga</label>
                <input type="text" name="harga" class="form-control" placeholder="harga" value="{{ $produk->harga }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">keterangan</label>                 
                    <input type="text" name="keterangan" class="form-control" placeholder="keterangan" value="{{ $produk->keterangan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">jumlah</label>
                <input type="text" name="jumlah" class="form-control" placeholder="jumlah" value="{{ $produk->jumlah }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection