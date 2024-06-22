@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

        <h2 class="text-bold text-danger mt-1">Teacher Edit</h2>
            <div class="card mt-3">

                <div class="card-body">
                    <form action="{{ route('teacher.update',$teacher->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                      <input type="hidden" name="role" value="1">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ $teacher->name }}">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address" value="{{ $teacher->email }}">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number" value="{{ $teacher->phone }}">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date of birth</label>
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Enter date of birth" value="{{ $teacher->date_of_birth }}">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="0" {{ $teacher->gender == 0 ? "checked" : ""}}>
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="1" {{ $teacher->gender == 1 ? "checked" : ""}}>
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="exampleFormControlInput1" placeholder="Enter address" value="{{ $teacher->address }}">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Profile</label><br>
                        <img src="{{ asset('storage/teacher/'.$teacher->profile ) }}" width="150px" height="130px"><br><br>
                        <input type="file" class="form-control" name="profile" id="exampleFormControlInput1">
                      </div>

                      <div class="mb-3 text-right">
                        <button class="btn btn-danger">Submit</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection