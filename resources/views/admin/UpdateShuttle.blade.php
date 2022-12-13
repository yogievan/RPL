<!DOCTYPE html>
<html lang="en">

{{-- title --}}
@section('title', 'Update Data Shuttle')

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
          <h4 class="font-weight-bolder text-white mb-0">Formulir Update Data Shuttle</h4>
        </div>
        <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
          <a href="sign-in"><button class="btn btn-danger">LOGOUT</button></a>
        </div>
      </div>
    </nav>
    {{-- Header --}}

    {{-- Content --}}
    <div class="container-fluid py-4">
      <form action="/updateDataShuttle/Update/{{ $shuttle -> id}}" method="POST">
        @csrf
        @method('PUT')
        <div>
          <div class="input-group flex-nowrap mt-3">
            <span class="input-group-text" id="addon-wrapping"><b>Nama Shuttle:</b></span>
            <input class="form-control" placeholder="Nama Daerah" name="nama_shuttle" value="{{ $shuttle -> nama_shuttle}}">
          </div>

          <div class="form-group mt-3">
            <label class="text-white text-lg"><b>Lokasi Shuttle</b></label>
            <input class="form-control" placeholder="Lokasi Daerah" name="lokasi" value="{{ $shuttle -> lokasi}}">
          </div>
    
          <div class="mt-3">
              <button type="submit" class="btn btn-primary">SAVE</button>
              <a href="/TabelShuttle">
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