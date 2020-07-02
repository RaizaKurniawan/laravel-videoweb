<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  @include('back-end.layout.allcss')
  @stack('css')
</head>

<body>
  <div class="wrapper ">

    @include('back-end.layout.side-bar')


    <div class="main-panel">
      <!-- Navbar & Header -->
        @include('back-end.layout.header')

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          @yield('content')
        </div>
      </div>

        {{-- Footer di sini Gan--}}
        @include('back-end.layout.footer')

    </div>
  </div>

  @stack('js')


  @include('back-end.layout.alljs')
</body>

</html>