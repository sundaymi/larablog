<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title> 
    <link rel="stylesheet" href="/css/app.css">
    <style> 
        .page-footer{
            position: absolute;
            bottom: 0px;
        }
    </style>  
</head>

<body>
  @include('includes.nav')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            @if (Auth::check())
              <li class="nav-item active">
                <a class="nav-link" href="{{route('newpost')}}">Newpost <span class="sr-only">(current)</span></a>
              </li>
            @endif
            {{-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul> --}}
          <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('search')}}">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    @yield('content')
          
      <!-- Footer -->
<footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" >© {{date('Y')}} Copyright:
      <a href="/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->       
  <script src="/js/app.js"></script>            
</body>
</html>