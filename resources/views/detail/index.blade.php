@extends('layout.base')

@section('base')
    <div class="p-3 mb-2 bg-body-tertiary rounded shadow p-3 mb-5">
        <div class="row text-center">
            <div class="col">
                <img class="img-fluid" src="{{ asset('storage/'. $barang->Foto) }}" alt="{{ $barang->Foto }}" style="width:100%">
            </div>
            <div class="col align-self-center">
                <h1>{{ $barang->barang }}</h1>
                <h1>Rp.{{ $barang->harga }}/hari</h1>
                <p>{{ $barang->deskripsi }}</p>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ url('pinjam', $barang->id) }}" class="btn btn-success me-md-2" type="button" style="width:100px">Pinjam</a>
            </div>
        </div>
    </div>
    
@endsection