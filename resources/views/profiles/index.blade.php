@extends('app')

@section('content')
    <h1>Profile Page</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>User Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Profile Summary</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($profiles as $profile)
            <tr>
                <td>{{ $profile->user->id }}</td>
                <td>{{ $profile->user->fName }}</td>
                <td>{{ $profile->user->lName }}</td>
                <td>{{ $profile->user->profileSummary }}</td>
                <td>{{ $profile->user->city }}</td>
                <td>{{ $profile->user->state }}</td>
                <td>{{ $profile->country}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection