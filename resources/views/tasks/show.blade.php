@extends('layout.app')

@section('title', 'Информация о задаче')

@section('content')
    <div class="task-info">
        <p class="task-info__id">Задача {{ $task->id }}</p>
        <p class="task-info__title">Название: {{ $task->title }}</p>
        <p class="task-info__description">Описание: {{ $task->description }}</p>
        <p class="task-info__status">Статус: {{ $task->status }}</p>
    </div>

    <div class="task-edit">
        <a class="task-edit__link" href="{{ route('tasks.index') }}">Назад</a>
        <a class="task-edit__link" href="{{ route('tasks.edit', $task->id) }}">Редактировать</a>
    </div>
@endsection
