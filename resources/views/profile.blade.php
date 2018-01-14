@extends('layouts.app')

@section('content')
	<div class="container" id ="main">
		<div class="row">
				<div class="col-sm-6 col-lg-12 col-md-6 avatar-area card card-body">
					<h3 class="text-center">Upload your Image</h3><br>
					<div class="center-content">
							<img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px;  height:150px; border-radius:50%;" class="rounded-circle mx-auto d-block img-thumbnail" alt="avatar">
					</div>

					<form class="text-center" enctype="multipart/form-data" action="/profile" method="POST">
					<div class="form-group">				
						<label class="custom-file">
							<input type="file" id="file" class="custom-file-input avatar-input" name="avatar">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<i class="fa fa-file-o custom-file-control">Choose image</i>
							<!-- <span class="custom-file-control">Choose image</span> -->
						</label>
					</div>
						<button type="submit" class="btn btn-outline-success btn-sm">
								Upload
						</button>
					</form>
				</div>

				<div class="col-sm-6 col-lg-12 col-md-6 info-area card card-body">
					<h3 class="text-center">Update your Personal Information</h3><br>
					<form class="mt-15" enctype="multipart/form-data" action="{{ url('/profile/' . Auth::user()->id) }}" method="POST">
						{{ csrf_field() }}
						<fieldset>
						<div class="form-group">
    		  		<input type="text" class="form-control" id="first_name" aria-describedby="firstNameHelp" placeholder="First Name" value="{{ Auth::user()->first_name }}" readonly>
						</div>
						<div class="form-group">
									<input type="test" class="form-control" id="last_name" aria-describedby="lastNameHelp" placeholder="Last Name" value="{{ Auth::user()->last_name }}" readonly>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{ Auth::user()->email }}" readonly>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="inputUserName" aria-describedby="userNameHelp" placeholder="Username" value="{{ Auth::user()->username }}"
											readonly>
								</div>
								<div class="form-group">
								<label for="exampleFormControlSelect1">D O B</label>
									<input type="date" class="form-control" id="dob" name="dob" aria-describedby="dateOfBirthHelp" placeholder="D O B">
								</div>
								
								<div class="form-group">
								<label for="exampleFormControlSelect1">Gender</label>
								<select class="form-control" id="gender" name="gender">			
									<option>Male</option>
									<option>Female</option>					
								</select>
								</div>

								<div class="form-group">
								<label for="exampleFormControlSelect1">Mobile Number</label>
									<input type="text" class="form-control" name="mobile" id="mobile" aria-describedby="mobileHelp" placeholder="Mobile Number">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-outline-warning">Update</button>
								</div> 
								</fieldset>       
						</form>      
				</div>
		</div>
	</div>
@endsection

@extends('layouts.footer')
