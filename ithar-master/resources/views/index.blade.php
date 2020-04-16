
@extends('parent')

@section('main')

<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Titre</th>
  <th width="35%">ID_Don</th>
  <th width="35%">Message</th>
  <th width="30%">Id_Post</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->titre }}</td>
   <td>{{ $row->Message}}</td>
   <td>
    
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection