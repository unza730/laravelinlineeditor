<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Table Inline Edit Using JQuery Editable - NiceSnippest.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style type="text/css">
      .panel-info{
    	margin-top:80px;
    	/* line-height:50px; */
    }
    body{
        margin:0;
        padding:0;
      height: 100vh;
    width: 100%;
    background-image: url("https://wallpaperaccess.com/full/472038.jpg"); 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    backdrop-filter: blur(7px);
    background-attachment:fixed;
    color: white;
    }
     .lab{
      color: #FFC600 !important;
      /* color: #612897 !important; */
      font-weight: bold;
    }
.container {
   margin-top: 2% !important;
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
a{
    color: white !important;

}
input {
    color: black !important;
}
</style>
<body>

       
    <div class="container">
    <!-- <div class="container"> -->
    <div class="row">
      <div class="col-md-7 col-md-offset-3 mt-2 p-3 bg-dark">
       <h2 class="text-center mt-1">Enter Data</h2>
    <form action="" method="POST">
     @csrf
  <div class="mb-3">
    <label for="name" class="form-label bg-dark text-light lab">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
  </div>
  <div class="mb-3">
    <label for="agentname" class="form-label bg-dark text-light lab">Agent Name</label>
    <input type="text" class="form-control" id="agentname" name="agentname">
  </div>
   <div class="mb-3">
    <label for="nooftask" class="form-label bg-dark text-light lab">No of Task</label>
    <input type="number" class="form-control" id="nooftask" name="nooftask">
  </div>
   <div class="mb-3">
    <label for="taskstatus" class="form-label bg-dark text-light lab">Task Status</label>
    <input type="text" class="form-control" id="taskstatus" name="taskstatus">
  <button type="submit" class="btn btn-outline-info mt-2">Submit</button>
  </div>
</form>
@if (session()->has('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
    </div>
    	<div class="col-md-7 col-md-offset-2 ">
        <!-- <h2 class="text-center">Laravel 8 Table Inline Edit Using JQuery Editable - NiceSnippest.com</h2> -->
        <div class="panel panel-info mainn ">
            <div class="panel-heading">Laravel 8 Table Inline Edit Using jQuery editable</div>
            
                <table class="table table-bordered data-table mainn">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Agent Name</th>
                            <th>No of Task</th>
                            <th>Task Status</th>
                        </tr>
                    </thead>
                    <tbody class="mainn">
                        @foreach($task as $task)
                            <tr>
                                <td>{{ $task->id }}</td>
                                <td>
                                    <a href="" class="update" data-name="name" data-type="text" data-pk="{{ $task->id }}" data-title="Enter name">{{ $task->name }}</a>
                                </td>
                                <td>
                                    <a href="" class="update" data-name="agentname" data-type="text" data-pk="{{ $task->id }}" data-title="Enter Agent Name">{{ $task->agentname }}</a>
                                </td>
                                 <td>
                                    <a href="" class="update" data-name="nooftask" data-type="text" data-pk="{{ $task->id }}" data-title="Enter No of Task">{{ $task->nooftask }}</a>
                                </td>
                                 <td>
                                    <a href="" class="update" data-name="taskstatus" data-type="text" data-pk="{{ $task->id }}" data-title="Enter Task Status">{{ $task->taskstatus }}</a>
                                </td>
                                <td>
                                    <a class="deleteProduct btn btn-xs btn-danger" data-id="{{ $task->id }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
	<script type="text/javascript">
	    $.fn.editable.defaults.mode = 'inline';

	    $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': '{{ csrf_token() }}'
	        }
	    });

	    $('.update').editable({
	        url: "{{ route('product') }}",
	        type: 'text',
	        pk: 1,
	        name: 'name',
	        title: 'Enter name'
	    });

	    $(".deleteProduct").click(function(){
	    	$(this).parents('tr').hide();
	        var id = $(this).data("id");
	        var token = '{{ csrf_token() }}';
	        $.ajax(
	        {
	            method:'POST',
	            url: "product/delete/"+id,
	            data: {_token: token},
	            success: function(data)
	            {
	                toastr.success('Successfully!','Delete');
	            }
	        });
	    });
	</script>
</body>
</html>