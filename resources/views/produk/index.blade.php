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
                <th>nama_produk</th>
                <th>keterangan</th>
                <th>harga</th>
                <th>jumlah</th>
            </tr>
        </thead>
        <tbody>
            @if($produk->count() > 0)
                @foreach($produk as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama_produk }}</td>
                        <td class="align-middle">{{ $rs->keterangan }}</td>
                        <td class="align-middle">{{ $rs->harga }}</td>
                        <td class="align-middle">{{ $rs->jumlah }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('produk.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('produk.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('produk.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Produk tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection