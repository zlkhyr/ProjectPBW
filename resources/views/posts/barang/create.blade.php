@extends('layout.base')

@section('base')
<div class="row justify-content-center">
  <div class="col-xl-8">
    <h1 class="text-center mt-4">Tambah Barang</h1>
    <form method="post" action="/posts/barang" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="barang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="barang" name="barang">
        </div>
        <div class="mb-3" style="width: 500px;">
          <label for="foto-barang" class="form-label">Foto barang</label>
          <input class="form-control" type="file" id="foto-barang" name="foto-barang" onchange="loadFile(event)">
        </div>
        <div id="preview" style="display:inline-block"></div>
        <div class="mb-3">
          <label for="harga" class="form-label d-block">Harga per Hari</label>
          <span class="input-group-btn d-inline">
            <button type="button" class="btn btn-success" onclick="decrementH()">-</button>
          </span>
          <span style="position: absolute; margin-left: 10px; margin-top:5px;">Rp.</span>
          <input type="number" class="form-control d-inline" id="harga" name="harga" step="500" min="0" value="0" style="width:200px; text-align:center;">
          <span class="input-group-btn d-inline">
            <button type="button" class="btn btn-success" onclick="incrementH()">+</button>
          </span>
        </div>
        <div class="mb-3">
          <label for="stock" class="form-label d-block">Stock</label>
          <span class="input-group-btn d-inline">
            <button type="button" class="btn btn-success" onclick="decrementS()">-</button>
          </span>
          <input type="number" class="form-control d-inline" id="stock" name="stock" step="1" min="1" value="1" style="width:200px; text-align:center;">
          <span class="input-group-btn d-inline">
            <button type="button" class="btn btn-success" onclick="incrementS()">+</button>
          </span>
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
  function incrementS() {
    var input = document.getElementById('stock');
    input.value = parseInt(input.value) + 1;
  }
  
  function decrementS() {
    var input = document.getElementById('stock');
    if (input.value <= 1) {
      input.value = 1;
    }else{
      input.value = parseInt(input.value) - 1;
    }
  }
  function incrementH() {
    var input = document.getElementById('harga');
    input.value = parseInt(input.value) + 500;
  }
  
  function decrementH() {
    var input = document.getElementById('harga');
    if (input.value < 1) {
      input.value = 0;
    }else{
      input.value = parseInt(input.value) - 500;
    }
  }
</script>
<style>
  input[type=number]::-webkit-outer-spin-button,
  input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@endsection