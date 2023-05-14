@extends('layout.base')

@section('base')
<main>
    <div class="album py-5 bg-body-tertiary">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
          @foreach ($post as $barang)
          <div class="col" id="menu-card">
            <div class="card shadow-sm" style="border-radius: 5px; align-items:center">
              <img class="img-fluid" src="{{ asset('storage/'. $barang->Foto) }}" alt="{{ $barang->Foto }}" style="width:200px; height:200px;">
              <div class="card-body text-start" style="border-top: 2px solid black; width:100%;">
                <p class="card-text"><h4>{{ $barang->barang }}</h4></p>
                <p class="card-text"><h5>Rp.{{ $barang->harga }}/hari</h5></p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="{{ url('detail', $barang->id) }}" class="btn btn-link">Lihat ></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  
  </main>
@endsection