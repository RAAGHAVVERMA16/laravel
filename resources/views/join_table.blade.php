@extends('layouts.app')

@section('content')
    @include('layouts.success')
        <div class="container">    
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->country_name }}</td>
                                <td>{{ $row->state_name }}</td>
                                <td>{{ $row->city_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection