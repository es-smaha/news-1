<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" href="{{  asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{  asset ('css/style.css')}}">
    <script src="{{ asset ('js/bootstrap.min.js') }}" ></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  
</head>
<body>
    
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background: #000080 !important ">
            <div class="container" style=" font-family: Lucida Handwriting , Brush Script MT, cursive; !important">


  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/posts')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Home page</a>
      </li>
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{url('/register')}}">Register</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/login')}}">login</a>
      </li>
      @else 

      <li class="nav-item">
        <a class="nav-link" href="">{{ Auth:: user()->name}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('logout')}}">logout</a>
      </li>
      @endguest
    </ul>
   
  </div>
</nav>

@yield("content")
 
</body>
</html>