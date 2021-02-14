<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Student</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

	<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							All Students <a href="/add-student" class="btn btn-success">Add New Student </a>
						</div>
						<div class="card-body">
							@if(Session::has('student_deleted'))
							<div class="alert alert-success" role="alert">
                             {{Session::get('student_deleted')}}
                            </div>
                            @endif
                             <table class="table table-striped">
                             	<thead>
                             		<tr>
                             			<th>Name</th>
                             			<th>Profile Image </th>
                             		</tr>
                             	</thead>
                             	<tbody>
                             		@foreach($students as $student)
                                       <tr>
                                          <td>{{$student->name}}</td>
                                          <td> <img src="{{asset('images')}}/{{$student->profileimage }}" style="max-width: 60px"> 
                                          </td>
                                          <td>
                                          	<a href="/edit-student/{{$student->id}}" class="btn btn-info">Edit </a>

                                          	<a href="/delete-student/{{$student->id}}" class="btn btn-danger">Delete</a>
                                          </td>
                                       </tr>
                             		@endforeach
                             	</tbody>
                             </table>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>