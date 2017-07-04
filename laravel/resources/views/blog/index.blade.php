{{Session::get('message') }}
<h1> My Blog </h1>

@foreach($blogs as $data)

<h2><a href ="blog/{{ $data ->id}}" >{{ $data->title}}</a></h2>
<p> {{ $data -> post }} </p> 
<a href ="blog/{{ $data ->id}}/edit"> Edit Post </a>
<form class="" action="blog/{{ $data->id }}" method ="post">
<input type="hidden" name="_method" value="delete">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type = "submit" name="name" value ="Delete post">
</form>
<hr>
@endforeach