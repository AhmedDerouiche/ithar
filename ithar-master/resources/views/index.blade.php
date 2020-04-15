@extends('parent')
@section('main')

<table class="table table-bordered table-striped">
 <tr>
  <th width="35%">First Name</th>
  <th width="35%">Last Name</th>
  <th width="30%">Action</th>
 </tr>
 @foreach($don as $row)
  <tr>
   <td>{{ $row->first_name }}</td>
   <td>{{ $row->last_name }}</td>
   <td>
    
   </td>
  </tr>
 @endforeach
</table>
{!! $don->links() !!}
@endsection