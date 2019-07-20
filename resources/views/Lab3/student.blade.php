@extends('master')

@section('tittle', 'Login')

@section('content')
    {{-- main title  --}}
    <div class="main-title">
        <h1> Student </h1>
        <p> Home / Student</p>
    </div>
    {{-- end main title --}}

    {{-- show products --}}
    <div class="main-content">
        <div class="log-title">Students</div>
        <div class="title-form">
            @foreach($students as $student)
                <div>
                    <p style="{{$student->id % 2 != 0 ? 'color: red' : 'color: blue'}}">Name : {{$student['name']}}</p>
                    <p>Address : {{$student['address']}}</p>
                    <p>University : {{$student['university']}}</p>
                    <p>Class : {{$student['classes']->class_name}}</p>
                    <p>Major : {{$student['classes']->major}}</p>
                    <p>Teacher : {{$student['classes']->teacher_name}}</p>
                    <br>
                </div>
            @endforeach
        </div>
    </div>
    {{-- end show products --}}


@endsection