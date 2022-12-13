<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/bus-solid-light.png">
  <link rel="icon" type="image/png" href="../assets/img/bus-solid-light.png">
  <title> Dashboard Admin</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-dark">
    {{-- sidebar --}}
    @include('navAdmin.sidebar')
    {{-- side bar --}}

  <main class="main-content position-relative border-radius-lg ">
    {{-- header --}}
    @include('navAdmin.header')
    {{-- Header --}}

    {{-- Content --}}
    @include('ex_content')
    {{-- Content --}}
    
    {{-- Footer --}}
    @include('footer.footer')
    {{-- Footer --}}
  </main>
</body>
</html>