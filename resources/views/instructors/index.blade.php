@extends('base')

@section('content')

<div class="container">
    <h1>Instructors</h1>
    <table class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Expertise</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instructors as $inst)
            <tr>
                <td>{{ $inst->lname }}</td>
                <td>{{ $inst->fname }}</td>
                <td>{{ $inst->aoe }}</td>
                <td>{{ $inst->rating }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@stop
