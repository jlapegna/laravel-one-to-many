@extends('layouts.base')

@section('content')

<h5><a href="{{route("home")}}">GO BACK</a></h5>

<div class="col-12">


    <h4>List of Tasks : {{$tasks -> count()}}</h4>
        <table>

        <tr>
            <td>[ID #]</td>
            <td>[TASK NAME]</td>
            <td>[ASSOCIATED EMPLOYEE]</td>
            <td>[EMPLOYEE ID]</td>

        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td>{{$task -> id}}</td>
            <td>{{$task -> name }} {{$task -> lastname }}</td>
            <td>{{$task -> employee -> name}}</td>
            <td>{{$task -> employee_id}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
