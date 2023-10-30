@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>

    <form method="POST" action="{{ route('update-data', $student->id) }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $student->name }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $student->email }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control">
                <option value="Male" {{ $student->gender === 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $student->gender === 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="form-group">
            <label for="class">Class</label>
            <input type="text" name="class" value="{{ $student->class }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="section">Section</label>
            <input type="text" name="section" value="{{ $student->section }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" value="{{ $student->address }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" value="{{ $student->phone_number }}" class="form-control">
        </div>
        
                <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">File <span class="required">*</span></label>
                     <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type='file' name='file' class="form-control">

                          @if ($errors->has('file'))
                                <span class="errormsg text-danger">{{ $errors->first('file') }}</span>
                          @endif
                     </div>
                </div>

        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
@endsection
