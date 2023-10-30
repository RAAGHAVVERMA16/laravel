@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($students as $student)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if ($student->image)
                            <img src="{{ asset($student->image) }}" alt="{{ $student->name }}" class="card-img-top" style="width: 100%; height: 200px;">
                        @else
                            <img src="{{ asset('uploads/users/1698666501_images.jpg') }}" alt="Default Image" class="card-img-top" style="width: 100%; height: 200px;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $student->name }}</h5>
                            <p class="card-text">Class: {{ $student->class }} - {{ $student->section }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

