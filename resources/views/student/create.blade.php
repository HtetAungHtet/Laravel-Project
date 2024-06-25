@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

          <h2 class="text-bold text-primary mt-2">Student Registration</h2>
            <div class="card mt-2">

                <div class="card-body">
                    <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="role" value="2">
                      <!-- Name -->
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                      </div>

                      <!-- Email -->
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email Address">
                      </div>

                      <!-- Phone -->
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number">
                      </div>

                      <!-- Date of Birth -->
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date of birth</label>
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Enter date of birth">
                      </div>

                      <!-- Gender -->
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

                      <!-- Student Skills -->
                      <div class="mb-3">
                        <h5>Skills</h5>
                        <div class="form-check">
                          <input class="form-check-input" name="skills[]" type="checkbox" value="java" id="java">
                          <label class="form-check-label" for="java">
                            Java
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" name="skills[]" type="checkbox" value="angular" id="angular">
                          <label class="form-check-label" for="angular">
                            Angular
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" name="skills[]" type="checkbox" value="Web Development" id="Web Development">
                          <label class="form-check-label" for="Web Development">
                            Web Development
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" name="skills[]" type="checkbox" value="Server" id="Server">
                          <label class="form-check-label" for="Server">
                            Server
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" name="skills[]" type="checkbox" value="Web Design" id="Web Design">
                          <label class="form-check-label" for="Web Design">
                            Web Design
                          </label>
                        </div>
                      </div>

                      <div class="mb-3">
                        <div class="form-check">
                          <input class="form-check-input" name="is_fullstack" type="checkbox" value="is_fullstack" id="is_fullstack">
                          <label class="form-check-label" for="is_fullstack">
                            Fullstack developer
                          </label>
                        </div>
                      </div>

                      <!-- Address -->
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="exampleFormControlInput1" placeholder="Enter address">
                      </div>

                      <!-- Profile -->
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Profile</label>
                        <input type="file" class="form-control" name="profile" id="exampleFormControlInput1">
                      </div>

                      <!-- Submit Button -->
                      <div class="mb-3 text-right">
                        <button class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection