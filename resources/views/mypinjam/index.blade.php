@extends('layout.base')

@section('base')
<div class="table-responsive text-center mt-4">
    <table class="table table-sm" style="background-color: #e3f2fd; border-radius:5px; ">
      <thead>
        <tr>
          <th scope="col">Barang</th>
          <th scope="col">Gambar</th>
          <th scope="col">Deadline</th>
          <th scope="col">hitung mundur</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($barang as $item)
        <tr>
            <td>{{ $item->nama_barang }}</td>
            <td>
                <img class="img-fluid rounded mx-auto d-block" src="{{ asset('storage/'. $item->foto_barang) }}" alt="{{ $item->foto_barang }}" width="200" height="200">
            </td>
            <td>
                {{ $item->deadline }}
                <form style="display: none">
                    <input type="date" name="deadline" id="deadline_{{ $item->id }}" value="{{ $item->deadline }}" onchange="calculateCountdown('{{ $item->id }}')">
                </form>
            </td>
            <td>
                <p class="fw-bold fs-5 mb-0" id="countdown_{{ $item->id }}"></p>
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
<script>
    function calculateCountdown(itemId) {
    var deadlineInput = document.getElementById('deadline_' + itemId);
    var deadline = new Date(deadlineInput.value);

    var countdownInterval = setInterval(function() {
      var currentDate = new Date();
      var remainingTime = deadline - currentDate;

      if (remainingTime > 0) {
        var days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
        var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
        document.getElementById('countdown_' + itemId).innerHTML = days + ":" + hours + ":" + minutes + ":" + seconds;
      } else if (remainingTime === 0) {
        clearInterval(countdownInterval);
        document.getElementById('countdown_' + itemId).innerHTML = "Countdown: Today is the deadline.";
      } else {
        clearInterval(countdownInterval);
        document.getElementById('countdown_' + itemId).innerHTML = "Countdown: Deadline has passed.";
      }
    }, 1000);
  }
  
  // Trigger the countdown for each item initially
  var items = {!! json_encode($barang) !!};
  items.forEach(function(item) {
    calculateCountdown(item.id);
  });
</script>
@endsection