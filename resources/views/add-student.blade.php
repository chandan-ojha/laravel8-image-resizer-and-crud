<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Student</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />

</head>
<body>

	<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header">
							Add New Student
						</div>
						<div class="card-body">

							@if(Session::has('student_added'))
							<div class="alert alert-success" role="alert">
                             {{Session::get('student_added')}}
                            </div>
                            @endif

							<form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" class="form-control" />
								</div>

								<div class="form-group">
									<label for="file"> Choose Profile Image</label>
									<input type="file" name="file" class="form-control"
									 onchange="previewFile(this)" />
									<img id="previewImg" alt="profile image" style="max-width:130px;margin-top: 20px; " />
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

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
    @if(Session::has('student_added'))
    <script >
    	toastr.success("{!!Session::get('student_added')!!}");
    </script>

    @endif

    @if(Session::has('student_added'))
     <script>
     	swal("Great Job!","{!! Session::get('student_added')!!}","success",{
     		button:"OK",
     	});
     </script>

    @endif
</body>
</html>