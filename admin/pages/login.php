@extends('layouts.app')
@section('title','Login Page')

@section('content')
<div class="page">
  <div class="page-single">
    <div class="container">
      <div class="row">
        <div class="col col-login mx-auto">
          <div class="text-center mb-6">
            <img src="/admin/images/brand/logo-4.png" class="h-6" alt="">
          </div>
          <form method="POST" action="{{ url('/admin/login') }}" class="card">
                {{csrf_field()}}
            <div class="card-body p-6">
              <div class="card-title">Login to your account</div>
              
              {{-- Wrong email or password --}}
              @if($error->message != "")
                <div class="alert alert-danger" role="alert">
                  {{$error->message}}
                </div>
              @endif
              
              <div class="form-group">
                <label class="form-label">Email address</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label class="form-label">
                  Password
                </label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
              </div>
              <div class="form-footer">
                  <input type="submit" class="btn btn-primary btn-block" value="Login" {{ __('Login') }}>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection