@extends('layout.base')

@section('base')
    <div class="p-3 mb-2 bg-body-tertiary rounded shadow p-3 mb-5 mt-4">
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
                {{-- <a href="{{ url('pinjam/create', $barang->id) }}" class="btn btn-success me-md-2" type="button" style="width:100px">Pinjam</a> --}}
                <a id="myBtn" class="btn btn-success me-md-2" type="button" style="width:100px">Pinjam</a>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content row text-center">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <span class="close">&times;</span>
        </div>    
          <form action="/pinjam/create" method="post">
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

    <style>
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        
        /* Modal Content */
        .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 50%;
        }
        
        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
        </style>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }


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