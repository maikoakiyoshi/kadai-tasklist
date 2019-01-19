@extends('layouts.app')<!--layout.appを共通で呼び出す -->

@section('content')<!--layout.appの@yield('content')に埋め込まれる -->

    <h1>タスク一覧</h1>
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>タスクの状況</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif 
    
    {!! link_to_route('tasks.create', 'タスクの追加', null, ['class' => 'btn btn-secondary']) !!}
@endsection