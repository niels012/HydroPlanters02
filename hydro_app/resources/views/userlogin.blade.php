@extends('layouts.public')

@section('content')

<div class="row justify-content-center mt-5">
  <div class="col-md-6">
    <form method="POST" action="{{ route('authenticate') }}">
      @csrf
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
  </div>
</div>

@endsection