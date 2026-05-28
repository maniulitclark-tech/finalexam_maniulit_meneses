@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Edit Student</h1>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" value="{{ $student->name }}" required>
            </div>
            <div class="mb-3">
                <label for="mname" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="mname" name="mname" value="{{ $student->mname }}" required>
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" value="{{ $student->lname }}" required>
            </div>
            <div class="mb-3">
                <label for="add" class="form-label">Address</label>
                <input type="text" class="form-control" id="add" name="add" value="{{ $student->add }}" required>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Address</label>
                <input type="dob" class="form-control" id="dob" name="dob" value="{{ $student->dob }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection