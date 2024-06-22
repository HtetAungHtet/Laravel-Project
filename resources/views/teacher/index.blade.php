@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h2 class="text-bold text-danger mt-1">Teacher List</h2>

            <div class="card mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date of Birth</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                    <th>Profile</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->phone }}</td>
                                        <td>{{ $teacher->date_of_birth }}</td>
                                        <td class="text-center">{{ $teacher->gender }}</td>
                                        <td>{{ $teacher->address }}</td>
                                        <td>
                                            <img src="{{ asset('storage/teacher/'.$teacher->profile )}}" width="50px" height="50px">    
                                        </td>
                                        <td>
                                            <a href="{{ route('teacher.edit',$teacher->id) }}" class="btn btn-secondary">E</a>
                                            <form action="{{ route('teacher.destroy',$teacher->id) }}" method="post" class="d-inline-block">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">D</button>
                                            </form>
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
</div>
@endsection