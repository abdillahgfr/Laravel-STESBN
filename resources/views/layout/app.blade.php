<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>STESBN | K2</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  {{-- Style --}}
  @stack('prpend-style')
  @include('includes.style')
  @stack('addon-style')
  
  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  {{-- Navbar --}}
  @include('includes.navbar')

  {{-- Page Content --}}
  @yield('content')

  {{-- Footer --}}
  @include('includes.footer')

  {{-- Script --}}
  @stack('prpend-script')
  @include('includes.script')
  @stack('addon-script')
</body>

</html>