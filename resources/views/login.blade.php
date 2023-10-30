@extends('layouts.app')
@section('content')

<br>
@include('layouts.success')
<div class="container-md">
    <div class="row-col-6-md">
<form action="{{ route('login-check') }}" method="post">
  @csrf
  <!-- Email input -->

  <div class="form-outline mb-4">
    <label class="form-label" for="form21">Email address </label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Email"/>
  </div>


  <!-- Password input -->

  <div class="form-outline mb-4">
    <label class="form-label" for="form22">Password</label>
    <input type="password" name="password" id="form22" class="form-control" placeholder="password" />
  </div>

  
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
    
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="restorepass.php">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4" value="submit">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="{{route('details')}}">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-link btn-floating mx-1"></button>
</div>
</form>
</div>
</div>
@endsection