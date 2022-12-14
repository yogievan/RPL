<!DOCTYPE html>
<html lang="en">

{{-- title --}}
@section('title', 'Sign-Up')

{{-- <Head> --}}
@include('head.head')
{{-- </Head> --}}

<body class="">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <div class="col">
        <img src="../assets/img/bus-solid-light.png" class="navbar-brand-img h-100" width="25px" alt="main_logo">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white">
          &nbsp; Pemesanan Shuttle Bus
        </a>
      </div>
      <div class="col-2">
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="/DashboardGuest">
                <i class="fa fa-chart-pie opacity-6  me-1"></i>
                Dashboard Guest
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-12 m-3 border-radius-lg" style="background-image: url('../assets/img/temsa-maraton-coach-bus-1.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
            <p class="text-lead text-white">Use these forms to login or create new account.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Register with</h5>
            </div>
            <div class="card-body">
              <form role="form" action="/create/user" method="POST">
                @csrf
                <div class="mb-3">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Nama User" aria-label="Name" name="username">
                </div>
                <div class="mb-3">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" placeholder="Nama User" aria-label="Name" name="nama_user">
                </div>
                <div class="mb-3">
                  <label>No. Telp</label>
                  <input type="text" class="form-control" placeholder="08XXXXXXXXXX" aria-label="08XXXXXXXXXX" name="no_telp">
                </div>
                <div class="mb-3">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email">
                </div>
                <div class="mb-3">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" placeholder="tgl_lahir"name="tgl_lahir">
                </div>
                <div class="mb-3">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Alamat"name="alamat">
                </div>
                <div class="mb-3">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password">
                </div>
                <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                </div>
                <p class="text-sm mt-3 mb-0 text-center">Already have an account? <a href="/" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  @include('footer.footer')

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>