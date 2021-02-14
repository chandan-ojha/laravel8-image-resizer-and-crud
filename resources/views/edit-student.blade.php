<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Student</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

	<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header">
							Edit Student
						</div>
						<div class="card-body">

							@if(Session::has('student_updated'))
							<div class="alert alert-success" role="alert">
                             {{Session::get('student_updated')}}
                            </div>
                            @endif

							<form method="POST" action="{{route('student.update')}}" enctype="multipart/form-data">
								@csrf
								<input type="hidden" name="id" value="{{$student->id}}">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" value="{{$student->name}}"
									 class="form-control" />
								</div>

								<div class="form-group">
									<label for="file"> Choose Profile Image</label>
									<input type="file" name="file" class="form-control"
									 onchange="previewFile(this)" />

									<img id="previewImg" alt="profile image" src="{{asset('images')}}/{{$student->profileimage}}" 
									style="max-width:130px;margin-top: 20px; " />
									
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script >
    	function previewFile(input){
    		var file=$("input[type=file]").get(0).files[0];
    		if(file)
    		{
    			var reader=new FileReader();
    			reader.onload=function(){

    			 $('#previewImg').attr("src",reader.result);	
    			}
    			reader.readAsDataURL(file);
    		}
    	}
    </script>
</body>
</html>