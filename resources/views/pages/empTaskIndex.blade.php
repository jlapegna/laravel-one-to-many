
@extends('layouts.base')

@section('content')

<div class="col-6 header-title">

<a href="{{route('emps.index')}}"><h4>Employee List: {{$emps -> count()}}</h4></a>


<table>

    <tr>
        <td>[ID]</td>
        <td>[NAME]</td>
        <td>[# OF TASKS ASSOCIATED]</td>
    </tr>
    @foreach ($emps as $emp)
    <tr>
    <td>{{$emp -> id}}</td>
    <td>{{$emp -> name }} {{$emp -> lastname }}</td>
    <td>{{$emp -> tasks() -> count()}}</td>
    </tr>
    @endforeach
</table>
</div>
<div class="col-6">
    <a href="{{route("tasks.index")}}"><h4>Tasks List: {{$tasks -> count()}}</h4></a>
    <table>

    <tr>
        <td>[ID#]</td>
        <td>[TASK NAME]</td>
        <td>[EMPLOYEE ASSOCIATED]</td>
        <td>[EMPLOYEE ID]</td>

    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td>{{$task -> id}}</td>
        <td>{{$task -> name }} {{$task -> lastname }}</td>
        <td>{{$task -> employee -> name}} {{$task -> employee -> lastname}}</td>
        <td>{{$task -> employee_id}}</td>
    </tr>
    @endforeach
</table>

</div>
@endsection
