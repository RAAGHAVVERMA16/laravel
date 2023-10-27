@extends('layouts.app')

@section('content')
    <h1>Student Info</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($student as $students)
                <tr>
                    <td>{{ $students->name }}</td>
                    <td>{{ $students->email }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
