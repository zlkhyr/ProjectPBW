  function loadFile(event){
    var imgPreview = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById('preview');
    var img = document.createElement('img');
    preview.innerHTML = '';
    img.src = imgPreview;
    img.width = "300";
    preview.appendChild(img);
  }

  function incrementS(namaform) {
    var input = document.getElementById(namaform);
    input.value = parseInt(input.value) + 1;
  }
  
  function decrementS(namaform) {
    var input = document.getElementById(namaform);
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