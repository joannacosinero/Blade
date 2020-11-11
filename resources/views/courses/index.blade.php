@extends('base')

@section('content')

<div class="container">
    <h1>Courses</h1>
    <table class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Start</th>
                <th>End</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $courses)
            <tr>
                <td>{{ $courses->name }}</td>
                <td>{{ $courses->description }}</td>
                <td>{{ $courses->start }}</td>
                <td>{{ $courses->end }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@stop
