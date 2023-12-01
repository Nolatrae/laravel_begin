@extends('layouts.app')

@section('content')
    <h1>Задачи</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/create" class="form">
        @csrf
        <div class="layoutInput">
            <label for="title">Название</label>
            <input type="text" name="title" id="title" required>
        </div>
        
        <div class="layoutInput">
            <label for="description">Содержание</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        
        <button type="submit">Добавить задачу</button>
    </form>
@endsection