@extends('layout.app')

@section('title', 'Список задач')

@section('content')
    <div class="task-list">
        <h1 class="task-list__title">Список задач</h1>

        <table class="task-list__table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Статус</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td >{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->status }}</td>
                        <td class="task-list__actions">
                            <a href="{{ route('tasks.show', $task->id) }}">Показать</a>
                            <a href="{{ route('tasks.edit', $task->id) }}">Редактировать</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="task-create">
        <a class="task-create__link" href="{{ route('tasks.create') }}">Создать задачу</a>
    </div>
@endsection
