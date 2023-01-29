@extends('admin.layout')

@section('content')
<table class="table table-sm table-dark" style="margin-top: 20px; border-radius: 10px;">
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">Title</th>
			<th scope="col">Category</th>
			<th scope="col" style="text-align: center;">Public</th>
			<th scope="col" style="text-align: center;">Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $data)
		<tr>
			<th scope="row">{{$data->idPost}}</th>
			<td>{{$data->title}}</td>
			<td>{{$data->category}}</td>
			@if($data->public === 1)
			<td style="text-align: center;"><a href="manager-blog/unpublic/{{$data->idPost}}" style="color: #1fe25c;"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
			@else
			<td style="text-align: center;"><a href="manager-blog/public/{{$data->idPost}}" style="color: #dc0505;"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></td>
			@endif
			<td style="text-align: center;"><a href="manager-blog/delete/{{$data->idPost}}" style="color: #dc0505;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection