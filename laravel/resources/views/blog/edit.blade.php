<h1> Edit Blog Post </h1>
<form class="" action="/blog/{{ $detailpage->id }}" method ="post">
<input type ="text" name ="title" value="" placeholder ="Titles">
{{
($errors->has('title')) ? $errors->first(title) : '' }} <br>

<textarea name="post" rows="8" cols ="40" placeholder="Description"> {{ $detailpage->post }}</textarea>
{{ ( $errors->has('post')) ? $errors-> first('post' ): '' }}<br>
<input type="hidden" name="_method" value="put">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type = "submit" name="name" value ="Edit post">
</form>