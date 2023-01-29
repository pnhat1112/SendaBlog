@extends('admin.layout')

@section('content')
<table class="table table-sm table-dark" style="margin-top: 20px; border-radius: 10px;">
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">Title</th>
			<th scope="col">Category</th>
			<th scope="col">Allow</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $data)
		<tr>
			<th scope="row">{{$data->idPost}}</th>
			<td>{{$data->title}}</td>
			<td>{{$data->category}}</td>
			<td><a href="allow-blog/{{$data->idPost}}" style="color: #1fe25c;"><i class="fa fa-check"></i></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection