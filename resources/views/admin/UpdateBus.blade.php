<!DOCTYPE html>
<html lang="en">

{{-- title --}}
@section('title', 'Update Data Bus')

{{-- <Head> --}}
@include('head.head')
{{-- </Head> --}}

<body class="g-sidenav-show bg-dark">
    {{-- sidebar --}}
    @include('navAdmin.sidebar')
    {{-- side bar --}}

  <main class="main-content position-relative border-radius-lg ">
    {{-- header --}}
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <div>
          <h4 class="font-weight-bolder text-white mb-0">Formulir Update Data Bus</h4>
        </div>
        <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
          <a href="sign-in"><button class="btn btn-danger">LOGOUT</button></a>
        </div>
      </div>
    </nav>
    {{-- Header --}}

    {{-- Content --}}
    <div class="container-fluid py-4">
      <form action="/updateDataBus/Update/{{ $bus -> id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
          <div class="mt-3">
            <label class="text-white">Tipe Bus</label>
            <select class="form-control" name="id_sifat" required>
                <option value="1" {{$bus -> id_sifat == '1' ? 'selected':''}}>Sewa</option>
                <option value="2" {{$bus -> id_sifat == '2' ? 'selected':''}}>Shuttle</option>
            </select>
          </div>
  
          <div class="input-group flex-nowrap mt-3">
            <span class="input-group-text" id="addon-wrapping"><b>Pabrikan:</b></span>
            <input class="form-control" placeholder="Pabrikan" name="pabrikan" value="{{ $bus -> pabrikan}}" required>
          </div>
    
          <div class="input-group flex-nowrap mt-3">
              <span class="input-group-text" id="addon-wrapping"><b>No. Mesin:</b></span>
              <input class="form-control" placeholder="No. Mesin" name="no_mesin" value="{{ $bus -> no_mesin}}" required>
          </div>
    
          <div class="input-group flex-nowrap mt-3">
            <span class="input-group-text" id="addon-wrapping"><b>No. Plat:</b></span>
            <input class="form-control" placeholder="No. Plat" name="no_plat" value="{{ $bus -> no_plat}}" required>
          </div>
  
          <div class="input-group flex-nowrap mt-3">
            <span class="input-group-text" id="addon-wrapping"><b>Harga Sewa atau Tiket:</b></span>
            <input class="form-control" placeholder="Rupiah" name="harga" value="{{ $bus -> harga}}" required>
          </div>
  
          <div class="input-group flex-nowrap mt-3">
            <span class="input-group-text" id="addon-wrapping"><b>Kapasitas Penumpang</b></span>
            <input class="form-control" placeholder="Jumlah kursi" name="jumlah_kursi" value="{{ $bus -> jumlah_kursi}}" required>
          </div>
  
          <div class="mt-3">
              <label class="text-white">Upload Gambar</label>
              <input class="form-control rounded" type="file" placeholder="File Gambar" name="gambar_bus" value="{{ $bus -> gambar_bus}}" >
          </div>
    
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">SAVE</button>
                <a href="/TabelBus">
                    <button type="button" class="btn btn-danger">BACK</button>
                </a>
            </div>
        </div>
      </form>
    </div>
    {{-- Content --}}
    
    {{-- Footer --}}
    @include('footer.footer')
    {{-- Footer --}}
  </main>
</body>
</html>