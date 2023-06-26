<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('css/bootstrap.css') }}">
    <script src="{{asset ('js/bootstrap.bundle.min.js') }}"> </script>
    <link rel="stylesheet" href="{{asset ('css/style.css') }}">
    <link rel="stylesheet" href="{{asset ('css/style.css') }}">
    

   
    
    
    <title> @yield('title') </title>
</head>
<body> 

@include('include.nav') 
@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session ('success') }}
    </div>
    @endif

    @if ($errors->any())
    <div  class="col-lg-4 offset-4 alert alert-dark" role="alert">
        <b> There are some errors in your submission:
       
    </div>
    
    @endif

    @yield('content')
</body>
</html>