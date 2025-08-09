@extends('layout.app')

@section('title', 'Редактировать задачу')

@section('content')
    <div class="task-form">
        <h1>Редактировать задачу {{ $task->id }}</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $task->title }}" placeholder="Название">
            <input type="text" name="description" value="{{ $task->description }}" placeholder="Описание">
            <select name="status" id="status">
                <option value="pending" {{ $task->status === 'pending' ? 'selected' : '' }}>pending</option>
                <option value="in_progress" {{ $task->status === 'in_progress' ? 'selected' : '' }}>in_progress</option>
                <option value="completed" {{ $task->status === 'completed' ? 'selected' : '' }}>completed</option>
            </select>
            <button type="submit">Сохранить</button>
        </form>
    </div>
@endsection
