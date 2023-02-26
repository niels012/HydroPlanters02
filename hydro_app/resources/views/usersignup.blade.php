@extends('layouts.public')

@section('content')

<div class="row justify-content-center mt-5">
  <div class="col-md-6">
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <h3>Create Account as:</h3>
      <div class="mb-3 mx-3">
        <div class="mb-6">
          <input type="radio" id="owner" name="account_type" value="1">
          <label class="h6" for="owner">Business Owner</label><br>
          <input type="radio" id="employee" name="account_type" value="2">
          <label class="h6" for="employee">Employee</label><br>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Full name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label class="form-label">Desired Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
  </div>
</div>

@endsection