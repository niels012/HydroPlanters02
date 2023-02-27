<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HydroPlanters</title>

    @include('partials.styles')

  </head>
  <body>
    
    <header class="p-3 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('dashboard.index') }}" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Gallery</a></li>
            <li><a href="#" class="nav-link px-2 text-white">About Us</a></li>
          </ul>
  
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            {{-- <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search"> --}}
          </form>
  
          <div class="text-end">
            <button type="button" onclick="window.location='{{ route('userlogin') }}'" class="btn btn-outline-light me-2">Login</button>
            <button type="button" onclick="window.location='{{ route('usersignup') }}'" class="btn btn-success">Sign-up</button>
          </div>
        </div>
      </div>
    </header>

    <div class="container">

      @include('partials.messages')

      @yield('content')
    </div>
    
    @include('partials.script')
  </body>
</html>