<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
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
</body>

</html>