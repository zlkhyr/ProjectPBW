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
            <div class="row d-grid gap-2 d-md-flex justify-content-md-start">
                <div class="mb-3">
                    <label for="stock" class="form-label d-block">Jumlah yang ingin di pinjam</label>
                    <span class="input-group-btn d-inline">
                      <button type="button" class="btn btn-success" onclick="decrementS('stock')">-</button>
                    </span>
                    <input type="number" class="form-control d-inline" id="stock" name="stock" step="1" min="1" value="1" style="width:200px; text-align:center;">
                    <span class="input-group-btn d-inline">
                      <button type="button" class="btn btn-success" onclick="incrementS('stock')">+</button>
                    </span>
                </div>
                <div class="mb-3">
                    <label for="hari" class="form-label d-block">Jumlah hari peminjaman</label>
                    <span class="input-group-btn d-inline">
                      <button type="button" class="btn btn-success" onclick="decrementS('hari')">-</button>
                    </span>
                    <input type="number" class="form-control d-inline" id="hari" name="hari" step="1" min="1" value="1" style="width:200px; text-align:center;">
                    <span class="input-group-btn d-inline">
                      <button type="button" class="btn btn-success" onclick="incrementS('hari')">+</button>
                    </span>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-success me-md-2" style="width:100px">Pinjam</button>
            </div>
        </div>
    </div>
@endsection
