<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    body{
      height: 100vh;
    width: 100%;
    background-image: url("https://wallpaperaccess.com/full/472038.jpg"); 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    backdrop-filter: blur(7px);
    color: white;
    }
    .mainn {
    /* margin: 5px;
    padding: 5px; */
    background-color: rgba(75, 71, 71, 0.515);
     /* background-color: rgba(0, 0, 0, 0.459); */
    color: white;
    /* min-height: 86vh; */
    /* color: white; */
    border-top: 2px solid gray;
     border-left: 2px solid gray;
     
}
    .lab{
      color: #FFC600 !important;
      /* color: #612897 !important; */
      font-weight: bold;
    }

    </style>
  </head>
  <body>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-3  mt-5 p-3 bg-dark">
    <form action="" method="POST">

     @csrf
     @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label bg-dark text-light lab">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{$student->name}}">
  </div>
  <div class="mb-3">
    <label for="agentname" class="form-label bg-dark text-light lab">Agent Name</label>
    <input type="text" class="form-control" id="agentname" name="agentname" value="{{$student->agentname}}">
  </div>
   <div class="mb-3">
    <label for="nooftask" class="form-label bg-dark text-light lab">No of Task</label>
    <input type="number" class="form-control" id="nooftask" name="nooftask" value="{{$student->nooftask}}">
  </div>
   <div class="mb-3">
    <label for="taskstatus" class="form-label bg-dark text-light lab">Task Status</label>
    <input type="text" class="form-control" id="taskstatus" name="taskstatus" value="{{$student->taskstatus}}">
  <button type="submit" class="btn btn-outline-info mt-2">Update</button>
  </div>
</form>
@if (session()->has('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
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