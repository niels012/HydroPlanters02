
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign up | HP</title>

  @include('partials.styles')
</head>
<body class="hold-transition login-page">
    <div class="container">
        @include('partials.messages')
    </div>  
    <div class="login-box">
      <div class="login-logo">
        <a href="#">
            <img src="../../../assets/images/HPlogobig.png" height="130px" alt="logo">
        </a>  
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body register-card-body">
            <h3>Create Account </h3>
          {{-- <p class="login-box-msg">Register a new membership</p> --}}
    
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="first_name" placeholder="First name">
                <input type="text" class="form-control" name="middle_name" placeholder="Middle name">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="last_name" placeholder="Last name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            {{-- <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Retype password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>    
            </div> --}}
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block mb-2">Register</button>
              </div>
            </div>
          </form>

    
          <a href="{{ route('login') }}" class="text-center">I already have an account</a>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    
    @include('partials.script')
</body>
</html>