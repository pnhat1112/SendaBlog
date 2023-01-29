@extends('user.layout')

@section('content')
<h3>{{$title}}</h3>
@foreach($posts as $data)
<div class="blog col-xl-12" style="border: 1px solid rgba(0,0,0,.125); margin-top: 10px; border-radius: 10px; min-height: 120px;">
    <div class="row">
        <div class="image-post col-xl-4 col-lg-4 col-md-4" style="padding: 10px;">
            <img src="{{URL::to($data->imagePath)}}">
        </div>
        <div class="title-post col-xl-8 col-lg-8 col-md-8" style="padding-top: 10px;">
            <a href="{{URL::to('blog/'.$data->slug)}}" style="font-weight: 500; font-size: 18px">{{$data->title}}<span style="float: right; font-weight: 400"><i class="fa fa-eye"></i>  {{$data->viewCount}}</span></a>

        </div>
    </div>
</div>
@endforeach


@endsection