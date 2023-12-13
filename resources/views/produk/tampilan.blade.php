@extends('app')
 
@section('content')
    <h1 class="mb-0">Detail Produk</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">nama_produk</label>
            <input type="text" name="nama_produk" class="form-control" placeholder="nama_produk" value="{{ $produk->nama_produk }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">harga</label>
            <input type="text" name="harga" class="form-control" placeholder="harga" value="{{ $produk->harga }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">keterangan</label>
            <input type="text" name="keterangan" class="form-control" placeholder="keterangan" value="{{ $produk->keterangan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">jumlah</label>
            <input type="text" name="jumlah" class="form-control" placeholder="jumlah" value="{{ $produk->jumlah }}" readonly>        
        </div>
    </div>
@endsection