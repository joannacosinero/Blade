@extends('base')

@section('content')

<div class="container">
    <h1>learners</h1>
    <table class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Level</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($learners as $learn)
            <tr>
                <td>{{ $learn->lname }}</td>
                <td>{{ $learn->fname }}</td>
                <td>{{ $learn->level }}</td>
                <td>{{ $learn->status }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@stop