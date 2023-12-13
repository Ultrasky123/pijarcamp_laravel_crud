@extends('app')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Produk</h1>
        <a href="/tambah" class="btn btn-primary">Tambahkan Produk</a></a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
            </tr>
        </thead>
    </table>
@endsection