@extends('layout.base')

@section('base')
<main>
    <div class="album py-5 bg-body-tertiary">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
          @foreach ($post as $item)
          <div class="col" id="menu-card">
            <div class="card shadow-sm" style="border-radius: 5px; align-items:center">
              <img class="img-fluid" src="{{ asset('storage/'. $item->Foto) }}" alt="{{ $item->Foto }}" style="width:200px; height:200px;">
              <div class="card-body text-start" style="border-top: 2px solid black; width:100%;">
                <p class="card-text"><h4>{{ $item->barang }}</h4></p>
                <p class="card-text"><h5>{{ $item->harga }}</h5></p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  
  </main>
@endsection