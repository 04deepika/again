@extends('include.layout')

@section('title', 'Login')

@section('content')

@include('include.nav')
<body class="text-center">
<div class="container">
  <div class="row">
    <div class="col-lg-6 offset-3 card mb-3">

    
<main class="form-signin p-3">
  <form>
    <img class="mb-1" src="{{asset ('images/bloodlogo.png')}}"  alt="" width="150" height="150">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating mb-2">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    
         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

           @error('email')
               <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                </span>
          @enderror
                </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary mb-5" type="submit">Sign in</button>
    <p>Don't have an account? 
      <a href="registers">Register here</a</p>
  </form>
</main>
</div>
  </div>
</div>


    
  

</body>
              @include('include.footer')
@endsection