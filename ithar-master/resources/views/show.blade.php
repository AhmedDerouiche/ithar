  
@extends('layout')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$don->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$don->body!!}
    </div>
    <hr>
    <small>Written on {{$don->created_at}} by {{$don->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id_don == $don->user_id)
            <a href="/don/{{$don->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['DonController@destroy', $don->id_don], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection