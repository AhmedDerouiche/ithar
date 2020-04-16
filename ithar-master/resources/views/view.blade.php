@extends('parent')

@section('main')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('don.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <h3>Titre - {{ $data->titre }} </h3>
 <h3>Message - {{ $data->Message }}</h3>
</div>
@endsection