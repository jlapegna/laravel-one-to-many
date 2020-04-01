
@extends('layouts.base')
@section('content')

<h5><a href="{{route("home")}}">GO BACK</a></h5>

<div class="col-12">
<div class="col-6">
    <h4>Employees w/ Tasks List </h4>

    <table>

        <tr>
            <td>[ID#]</td>
            <td>[NAME]</td>
            <td>[# OF TASKS ASSOCIATED]</td>
        </tr>
        @foreach ($emps as $emp)
        @if ($emp -> tasks() -> count() > 0 )
            <tr>
            <td>{{$emp -> id}}</td>
            <td>{{$emp -> name }} {{$emp -> lastname }}</td>
            <td>{{$emp -> tasks() -> count()}}</td>
        @endif
        @endforeach
        </table>
    </div>
    <div class="col-6">

    <h4>Employee without task</h4>

    <table>

        <tr>
            <td>[ID]</td>
            <td>[NAME]</td>
        </tr>
        @foreach ($emps as $emp)
        @if ($emp -> tasks() -> count() < 1 )

            <tr>
            <td>{{$emp -> id}}</td>
            <td> <strong>{{$emp -> name }} {{$emp -> lastname }}</strong></td>

            </tr>
        @endif
        @endforeach
        </table>
    </div>
    @endsection
