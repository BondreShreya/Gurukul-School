<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}" style="width:50%">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
  GURUKUL INDIAN OLYMPIAD SCHOOL OF SCHOLOR
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

@include('layout.pages.link')
@yield('custom_styles')
<style>
.custom-scroll{
			max-width:500px;
			width:100%;
			height:530px;
		  text-align:left;
			background:#fff;
		  display:inline-block;
			overflow:auto;
		  border-radius:15px;
		}
  
		
</style>
</head>
<body class="">
  <div class="wrapper ">
  @include('layout.pages.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      @include('layout.pages.navbar')
      <!-- End Navbar -->
    
     @yield('content')
    </div>
  </div>
  @include('layout.pages.script')
@yield('customjs')
</body>

</html>