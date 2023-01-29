@extends('user.layout')

@section('content')
<h2>tạo bài viết</h2>
<form action="">
    <label for="fname">Tiêu đề:</label>
    <input type="text" id="title" name="title" style="width: 100%; border-radius: 10px;" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)">
    <label for="lname">Slug:</label>
    <input type="text" id="slug" name="slug" style="width: 100%; border-radius: 10px;">
    <label for="lname">Danh mục:</label>
    <input type="text" id="category" name="category" value="thảo luận" disabled="disabled" style="width: 100%; border-radius: 10px;">
    <label for="fname">Nội dung:</label>
    <textarea id="txtEditContent" name="txtEditContent" style="height: 500px;"></textarea></br>
    <label for="fname">Ảnh bài viết:</label>
    <input type="file" name="file" style="width: 100%; border-radius: 10px;">
    <button type="submit" style="float: right; border-radius: 10px;">Đăng bài</button>
</form>
@endsection