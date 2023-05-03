@extends('layout.base')

@section('base')
<div class="row justify-content-center">
  <div class="col-xl-8">
    <h1 class="text-center mt-4">Tambah barang</h1>
    <form method="post" action="/posts/barang" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="barang" class="form-label">Barang</label>
          <input type="text" class="form-control" id="barang" name="barang">
        </div>
        <div class="mb-3" style="width: 500px;">
          <label for="foto-barang" class="form-label">Foto barang</label>
          <input class="form-control" type="file" id="foto-barang" name="foto-barang" onchange="loadFile(event)">
        </div>
        <div id="preview" style="display:inline-block"></div>
        <div class="mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input type="text" class="form-control" id="harga" name="harga">
        </div>
        <div class="mb-3">
          <label for="stock" class="form-label">Stock</label>
          <input type="text" class="form-control" id="stock" name="stock">
        </div>
        {{-- <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" rows="5"></textarea>
        </div> --}}
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
  </div>
</div>
<script>
  function loadFile(event){
    var imgPreview = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById('preview');
    var img = document.createElement('img');
    preview.innerHTML = '';
    img.src = imgPreview;
    img.width = "300";
    preview.appendChild(img);
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@endsection