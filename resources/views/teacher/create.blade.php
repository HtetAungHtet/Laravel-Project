@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                   <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Name</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter name">
                   </div>

                   <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Email</label>
                     <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter email Address">
                   </div>

                   <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Phone</label>
                     <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter phone number">
                   </div>

                   <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                     <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter date of birth">
                   </div>

                   <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                   </div>

                   <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Address</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter address">
                   </div>

                   <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Profile</label>
                     <input type="file" class="form-control" id="exampleFormControlInput1">
                   </div>

                   <div class="mb-3 text-right">
                    <button class="btn btn-danger">Submit</button>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection