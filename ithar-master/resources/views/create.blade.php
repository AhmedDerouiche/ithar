@extends('parent')

@section('main')
{!! Form::open([
    'route' => 'don.store'
]) !!}

<div class="form-group">
    {!! Form::label('TitreDon', 'TitreDon:', ['class' => 'control-label']) !!}
    {!! Form::text('TitreDon', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('message', 'Message:', ['class' => 'control-label']) !!}
    {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create ', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection