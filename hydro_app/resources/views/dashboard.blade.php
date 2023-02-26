@extends('layouts.default')

@section('content')

  <h1>Welcome to your dashboard {{Auth::user()->name;}}!</h1>

@endsection