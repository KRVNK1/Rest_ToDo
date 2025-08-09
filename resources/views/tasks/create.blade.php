@extends('layout.app')

@section('title', 'Создать задачу')

@section('content')
<div class="task-form">
    <h1>Создать задачу</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Название">
        <input type="text" name="description" placeholder="Описание">
        <select name="status" id="status">
            <option value="pending">pending</option>
            <option value="in_progress">in_progress</option>
            <option value="completed">completed</option>
        </select>
        <button type="submit">Сохранить</button>
    </form>
</div>
@endsection