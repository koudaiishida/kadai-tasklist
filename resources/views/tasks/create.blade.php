@extends('layouts.app')

@section('content')

<h1>Create A New Task</h1>


    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
    {!! Form::label('status', 'STATUS:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('CREATE') !!}

    {!! Form::close() !!}
@endsection