<!DOCTYPE html>
<html lang="en">

{{-- title --}}
@section('title', 'Booking Log')

{{-- Head --}}
@include('head.head')
{{-- Head --}}

<body class="g-sidenav-show bg-dark">
  <main class="main-content position-relative border-radius-lg ">
      {{-- Content --}}
        <div class="container-fluid py-4">
            <div class="row">
                <nav class="navbar navbar-expand-lg rounded">
                    <div class="col">
                    <a class="navbar-brand text-white mb-0 h1 text-lg" href="/DashboardCustomer">
                        <img src="../assets/img/bus-solid-light.png" width="40" height="32" class="navbar-brand-img h-100" alt="main_logo">
                        &nbsp BookingBus.com
                    </a>
                    </div>
                    <div class="col-2">
                        <a href="/BookingLog" class="text-white mb-0 h1 text-lg">Booking Log</i></a>
                    </div>
                    <div class="col-1">
                        <a href="/profileUser"><i class="fas fa-user-circle text-white mb-0 h1 text-lg"> Profile</i></a>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <a href="/DashboardCustomer" class="btn btn-primary">BACK</a>
                </div>
            </div>
            <div class="container-fluid py-1">
                <div class="card-header mt-3">
                  <h5 class="text-white">Booking Log Tiket Shuttle</h5>
                  <div class="card-body bg-white rounded">
                    <table class="table table-striped">
                        <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">ID Bus</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Shuttle Asal</th>
                            <th scope="col">Shuttle Tujuan</th>
                            <th scope="col">Total Bayar</th>
                            <th scope="col">Validasi</th>
                            <th scope="col">ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($pribadi as $no => $tp)
                            <tr class="text-center">
                                <th scope="row">{{$pribadi -> firstItem() + $no}}</th>
                                <td>{{$tp -> id_bus}}</td>
                                <td>{{$tp -> nama_user}}</td>
                                <td>{{$tp -> shuttle_asal}}</td>
                                <td>{{$tp -> shuttle_tujuan}}</td>
                                <td>{{$tp -> total_bayar}}</td>
                                <td>{{$tp -> valiadi}}</td>
                                <td>
                                    <a href="/BookingLog/Shuttle/{{$tp -> id}}" class="btn btn-outline-primary">
                                        View
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <span class="container-fluid">{{$pribadi -> links()}}</span>
                  </div>  
                </div>
              </div>
          
              <div class="container-fluid py-4">
                <div class="card-header mt-3">
                  <h5 class="text-white">Booking Log Sewa Bus</h5>
                  <div class="card-body bg-white rounded">
                    <table class="table table-striped">
                        <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">ID Bus</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Kota Asal</th>
                            <th scope="col">Kota Tujuan</th>
                            <th scope="col">Tanggal Berangkat</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Total Bayar</th>
                            <th scope="col">Validasi</th>
                            <th scope="col">ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($instansi as $no => $ti)
                            <tr class="text-center">
                                <th scope="row">{{$instansi -> firstItem() + $no}}</th>
                                <td>{{$ti -> id_bus}}</td>
                                <td>{{$ti -> nama_user}}</td>
                                <td>{{$ti -> kota_berangkat}}</td>
                                <td>{{$ti -> kota_tujuan}}</td>
                                <td>{{$ti -> tgl_keberangkatan}}</td>
                                <td>{{$ti -> tgl_pengembalian}}</td>
                                <td>{{$ti -> total_bayar}}</td>
                                <td>{{$ti -> validasi}}</td>
                                <td>
                                    <a href="/BookingLog/Sewa/{{$ti -> id}}" class="btn btn-outline-primary">
                                        View
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <span class="container-fluid">{{$instansi -> links()}}</span>
                  </div>  
                </div>
        </div>
      {{-- Content --}}
      
      {{-- Footer --}}
      @include('footer.footer')
      {{-- Footer --}}
  </main>
</body>
</html>