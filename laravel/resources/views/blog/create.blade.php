@extends('layouts.admin')
@section('content')

<h1> Add New Blog Post </h1>

<form class="" action="/blog" method ="post">
{!! csrf_field() !!}
<input type ="text" name ="title" value="" placeholder ="Titles">
{{
($errors->has ('title')) ? $errors->first (title) : '' }} <br>

<textarea name="post" rows="8" cols ="40" placeholder="Description"></textarea>
{{ ( $errors->has('post')) ? $errors-> first('post' ): '' }}<br>
<input type="hidden" name="_taken" value="{{ csrf_token() }}">
<input type = "submit" name="name" value ="post">
</form>
@endsection