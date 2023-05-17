@extends('layout.base')

@section('base')
    <div class="p-3 mb-2 bg-body-tertiary rounded shadow p-3 mb-5 mt-4">
        <div class="row text-center">
            {{-- <div class="col">
                <img class="img-fluid" src="{{ asset('storage/'. $barang->Foto) }}" alt="{{ $barang->Foto }}" style="width:70%">
            </div> --}}
            <div class="col align-self-center">
                <h1>{{ $barang->barang }}</h1>
                <h1>Rp.{{ $barang->harga }}/hari</h1>
                <h1>stock : {{ $barang->stock }}</h1>
            </div>
            <form action="/detail/{id}" method="post">
              @csrf
              <div class="row d-grid gap-2 d-md-flex justify-content-md-start mt-4">
                  <div class="mb-3">
                      <label for="jumlahpinjam" class="form-label d-block">Jumlah yang ingin di pinjam</label>
                      <input type="number" class="form-control rounded d-inline" id="jumlahpinjam" name="jumlahpinjam" step="1" min="1" style="width:200px; border:2px solid black; text-align:center;" required>
                      <p id="error2" style="color: red; display:none;">Minimal 1</p>
                  </div>
                  <div class="mb-3">
                      <label for="lamapinjam" class="form-label d-block">Jumlah hari peminjaman</label>
                      <input type="number" class="form-control rounded d-inline" id="lamapinjam" name="lamapinjam" step="1" min="1" style="width:200px; border:2px solid black; text-align:center;" oninput="calculateDate()" required>
                      <p id="error" style="color: red; display:none;">Pinjam minimal 1 hari</p>
                  </div>
                  <div class="mb-3 text-center">
                      <label for="deadline" class="form-label d-block">deadline</label>
                      <input type="date" class="form-control rounded" id="deadline" name="deadline" readonly style="width:200px; border:2px solid black; text-align:center; display:inline-block">
                  </div>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="submit" class="btn btn-success me-md-2" id="pinjam" style="width:100px">Pinjam</button>
              </div>
            </form>
        </div>
    </div>
    <script>
        var inputElement = document.getElementById("lamapinjam");
        var errorMessageElement = document.getElementById("error");
        var btnpinjamElement = document.getElementById("pinjam");

        inputElement.addEventListener("input", function() {
          var inputValue = parseInt(inputElement.value);
            
          if (inputValue <= 0) {
            errorMessageElement.style.display = "block";
            btnpinjamElement.style.display = "none";
          } else {
            errorMessageElement.style.display = "none";
            btnpinjamElement.style.display = "block";
          }
        });

        var inputElement2 = document.getElementById("jumlahpinjam");
        var errorMessageElement2 = document.getElementById("error2");

        inputElement2.addEventListener("input", function() {
          var inputValue = parseInt(inputElement2.value);
            
          if (inputValue <= 0) {
            errorMessageElement2.style.display = "block";
            btnpinjamElement.style.display = "none";
          } else {
            errorMessageElement2.style.display = "none";
            btnpinjamElement.style.display = "block";
          }
        });
      </script>
@endsection
