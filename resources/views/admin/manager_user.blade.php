@extends('admin.layout')

@section('content')
<table class="table table-sm table-dark" style="margin-top: 20px; border-radius: 10px;">
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">First Name</th>
			<th scope="col">Last Name</th>
			<th scope="col">User Name</th>
			<th scope="col" style="text-align: center;">Block</th>
			<th scope="col" style="text-align: center;">Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $data)
		<tr>
			<th scope="row">{{$data->id}}</th>
			<td>{{$data->firstName}}</td>
			<td>{{$data->lastName}}</td>
			<td>{{$data->userName}}</td>
			@if($data->block === 0)
			<td style="text-align: center;"><a href="manager-user/block/{{$data->id}}" style="color: #1fe25c;"><i class="fa fa-unlock" aria-hidden="true"></i></a></td>
			@else
			<td style="text-align: center;"><a href="manager-user/unblock/{{$data->id}}" style="color: #dc0505;"><i class="fa fa-lock" aria-hidden="true"></i></a></td>
			@endif
			<td style="text-align: center;"><a href="manager-user/delete/{{$data->id}}" style="color: #dc0505;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection