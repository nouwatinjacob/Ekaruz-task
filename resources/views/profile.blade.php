@extends('layouts.app')

@section('content')
	<div class="container mb-20 col-md-9 mx-auto wrapper">
			@if(count($errors) > 0)
				@foreach($errors->all() as $error)
					<div class="alert alert-danger" sty>
						{{$error}}
					</div>
				@endforeach
			@endif
	<div class="row">
		<div class="col-12 col-lg-1"></div>
    <div class="col-6 col-lg-4 left-profile">
			<div class="avatar-area">
         <div class="center-content">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px;  height:150px; border-radius:50%;" class="rounded mx-auto d-block img-thumbnail" alt="avatar">
					</div>
					
          <form class="text-center" enctype="multipart/form-data" action="/profile" method="POST">
            <label class="btn btn-secondary btn-sm mt-2">
              <i class="fa fa-camera"></i> Choose photo
         		  <input type="file" name="avatar" class="hidden avatar-input" >
							 <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </label>
            <button type="submit" class="btn btn-outline-success btn-sm">
              Upload
            </button>
          </form>
      </div>
		</div>
		<div class="col-12 col-lg-1"></div>
    <div class="col-12 col-sm-6 col-lg-5 right-profile">
			<form class="mt-15" enctype="multipart/form-data" action="{{ url('/profile/' . Auth::user()->id) }}" method="POST">
			{{ csrf_field() }}
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
        <button type="submit" class="btn btn-outline-warning">Update</button>
			</form>      
		</div>
		<div class="col-12 col-lg-1"></div>
	</div>
	

@endsection

@extends('layouts.footer')