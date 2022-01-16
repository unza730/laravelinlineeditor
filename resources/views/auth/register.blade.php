<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="{{ url('/login.css') }}"> -->
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>login!</title>
    <style>
body{
    background-color:black;
    color:white
}
h1{
    color:white;
}
hr {
    text-align: center;
    background-color: yellow;
}
a{
    color:white;
    text-decoration:none;
    margin-bottom:5px;
}

      </style>
  </head>
  
  <body>
      <div class="container m-4 text-center ">
          <div class="row ml-5 ">
              <h1>Register</h1>
              <hr >
          </div>
      </div>
   
    <div class="container mt-3 ml-4 mb-3">
        <div class="row">
            <div class="col-3">

            </div>
         <div class="col-5 bg-dark">
    <form action="{{ route('save') }}" method="post">
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>

        @endif
         @if(Session::get('fail'))
        <div class="alert alert-danger mt-2">
            {{ Session::get('fail') }}
        </div>

        @endif
        @csrf

         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label bg-dark text-light text-bold mt-3">First Name</label>
    <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="fname" value="{{ old('fname') }}">
   <span class="text-danger">@error('fname') {{ $message }} @enderror</span>
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label bg-dark text-light text-bold mt-3">Last Name</label>
    <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="lname" value="{{ old('lname') }}">
   <span class="text-danger">@error('lname') {{ $message }} @enderror</span>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label bg-dark text-light text-bold mt-3">Email address</label>
    <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
       <span class="text-danger">@error('email') {{ $message }} @enderror</span>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label bg-dark text-light  font-weight-5">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{ old('password') }}">
   <span class="text-danger">@error('password') {{ $message }} @enderror</span>  
</div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn mb-3 btn-outline-info">Create Account</button>
<div>
  <a href="{{ route('login') }}">I already have an account, Sign in</a>
</div>
</form>
</div>
        </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>