@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h2 class="text-bold text-primary mt-2">Student List</h2>

            <div class="card mt-2">

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
                                        
                                        @if (Auth::user()->role == 2)
                                            <th class="d-none">Actions</th>
                                        @else
                                            <th>Actions</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->phone }}</td>
                                            <td>{{ $student->date_of_birth }}</td>
                                            <td class="text-center">{{ $student->gender }}</td>
                                            <td>{{ $student->address }}</td>
                                            <td>
                                                <img src="{{ asset('storage/student/'.$student->profile )}}" width="50px" height="50px">    
                                            </td>
                                            @if (Auth::user()->role == 2)
                                                <td class="d-none">
                                                    <a href="{{ route('student.edit',$student->id) }}" class="btn btn-success">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="{{ route('student.destroy',$student->id) }}" method="post" class="d-inline-block">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            @else
                                                <td>
                                                    <a href="{{ route('student.edit',$student->id) }}" class="btn btn-success">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="{{ route('student.destroy',$student->id) }}" method="post" class="d-inline-block">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            @endif
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