@extends('layouts.app')

@section('content')
    <h1>Задачи</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (count($tasks) > 0)
        @foreach ($tasks as $task)
            <div class="task">
                <p>{{ $task['title'] }}</p>
                <p>{{ $task['description'] }}</p>
            </div>
        @endforeach
    @else
        <p>Задачи отсутствуют.</p>
    @endif
@endsection