@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} Rewrite Tasks</h1>



    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('REWRITE') !!}

    {!! Form::close() !!}


@endsection