@extends('user.layout')

@section('content')
<h2>tạo bài viết</h2>
<form action="uploadPost" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <h4 style="text-transform: capitalize;">Tiêu Đề:</h4>
    <input type="text" id="title" name="title" style="width: 100%; border-radius: 10px;" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)">
    <h4 style="text-transform: capitalize;">slug:</h4>
    <input type="text" id="slug" name="slug" style="width: 100%; border-radius: 10px;">
    <input type="hidden" id="category" name="category" value="{{$value}}" style="width: 100%; border-radius: 10px;">
    <h4 style="text-transform: capitalize;">Nội dung:</h4>
    <textarea id="txtEditContent" name="txtEditContent" style="height: 500px;"></textarea></br>
    <h4 style="text-transform: capitalize;">Ảnh bài viết:</h4>
    <input type="file" name="file" required="true" style="width: 100%; border-radius: 10px;">
    <button type="submit" value="upload" style="float: right; border-radius: 10px;">Đăng bài</button>
</form>
@endsection
