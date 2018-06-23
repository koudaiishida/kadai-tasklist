@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} detailed info</h1>

    <p>{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'Rewrite This Task', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('DELETE') !!}
    {!! Form::close() !!}


@endsection