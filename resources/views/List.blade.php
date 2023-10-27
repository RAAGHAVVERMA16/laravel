@extends('layouts.app')

@section('content')
    <h1>Student Info</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th> Sr. number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Section</th>
                <th>Address</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @php
                $serial=1;
            @endphp
            @foreach($student as $students)
                <tr>
                    <td>{{ $serial++ }}</td>
                    <td>{{ $students->name }}</td>
                    <td>{{ $students->email }}</td>
                    <td>{{ $students->gender }}</td>
                    <td>{{ $students->class }}</td>
                    <td>{{ $students->section }}</td>
                    <td>{{ $students->address }}</td>
                    <td>{{ $students->phone_number }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
