@extends('layouts.app')

@section('content')
@include('layouts.success')
    <h1>Student Info</h1>
  
    <table class="table table-striped" id='table'>
  
        <thead>
            <tr>
                <th class="text-center"> Sr. number</th>
                <th class="text-center"> Image</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Gender</th>
                <th class="text-center">Class</th>
                <th class="text-center">Section</th>
                <th class="text-center">Address</th>
                <th class="text-center">Phone Number</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $serial=1;
            @endphp
            @foreach($student as $students)
                <tr>
                    <td>{{ $serial++ }}</td>
                    <td>
                    @if ($students->image)
                        <img src="{{ asset($students->image) }}" alt="Student Image" width="50" height="50">
                    @else
                    <img src="{{asset('uploads/users/1698666501_images.jpg') }}" alt="Student Image" width="50" height="50">
                    @endif
                </td>
                    <td>{{ $students->name }}</td>
                    <td>{{ $students->email }}</td>
                    <td>{{ $students->gender }}</td>
                    <td>{{ $students->class }}</td>
                    <td>{{ $students->section }}</td>
                    <td>{{ $students->address }}</td>
                    <td>{{ $students->phone_number }}</td>
                    <td>
    <a href="{{ route('update', ['id' => $students->id]) }}" class="btn btn-info">
        <span class="glyphicon glyphicon-edit"></span> Edit
    </a>
    <a href="{{ route('delete', ['id' => $students->id]) }}" class="btn btn-danger">
    <span class="glyphicon glyphicon-trash"></span> Delete
    </a>
    
</td>
</tr>
@endforeach
</tbody>
</table>
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
@endsection
