@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email Address">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date of birth</label>
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Enter date of birth">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="0">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="1">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="exampleFormControlInput1" placeholder="Enter address">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Profile</label>
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