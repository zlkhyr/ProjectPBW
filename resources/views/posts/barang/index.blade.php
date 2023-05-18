@extends('layout.base')

@section('base')
@if (session()->has('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<a href="/posts/barang/create" class="btn btn-success mb-4 mt-4">Tambah</a>
<div class="table-responsive text-center">
    <table class="table table-sm" style="background-color: #e3f2fd; border-radius:5px; ">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Barang</th>
          <th scope="col">Gambar</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">operasi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($post as $barang)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $barang->barang }}</td>
            <td>
                <img class="img-fluid rounded mx-auto d-block" src="{{ asset('storage/'. $barang->Foto) }}" alt="{{ $barang->Foto }}" width="200" height="200">
            </td>
            <td>{{ $barang->harga }}</td>
            <td>{{ $barang->stock }}</td>
            <td>
              <form action="/posts/barang" method="POST">
              @method('delete')
              @csrf
              <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus barang ?')">
                Hapus
              </button>
              </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
<style>
  td{
    vertical-align: middle;"
  }
</style>
@endsection
