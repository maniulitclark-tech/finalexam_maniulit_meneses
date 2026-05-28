@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Student Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <a href="#" class="btn btn-info">Add New Student</a> <br> <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Middle Name</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                        </tr>
                                    </thead>
                                    <tbody  >
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->first_name }}</td>
                                            <td>{{ $student->last_name }}</td>
                                            <td>{{ $student->middle_name }}</td>
                                            <td>{{ $student->address }}</td>
                                            <td>{{ $student->dob }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Edit</a>
                                                <a href="#" class="btn btn-danger btn-md active" role="button" aria-pressed="true">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection