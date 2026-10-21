@extends("layout.header")
@section('container')
        <div class="container text-center">
  <div class="row mt-4">
    <div class="col-md-4 col-12 mb-3">
      <img src="{{ asset('img/dedinsya.jpg') }}" class="img-thumbnail rounded shadow-sm" alt="Dedain Syauqi">
    </div>
    <div class="col">
        <table class="table table-borderless text-start">
            <tr>
                <td><strong>Nama</strong></td>
                <td>:</td>
                <td>Dedain Syauqi</td>
            </tr>
            <tr>
                <td><strong>Tempat, Tanggal Lahir</strong></td>
                <td>:</td>
                <td>Bandung, 25 Mei 2009</td>
            </tr>
            <tr>
                <td><strong>Alamat</strong></td>
                <td>:</td>
                <td>Jl. Panyawungan RT. 03, Cileunyi Wetan, Bandung</td>
            </tr>
            <tr>
                <td><strong>Hobi</strong></td>
                <td>:</td>
                <td>Badminton, Berenang, Bermain Game</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>:</td>
                <td>ddnsyqi@gmail.com</td>
            </tr>
        </table>
    </div>
  </div>
</div>
@endsection