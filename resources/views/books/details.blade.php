<div>
    <h1>{{$book -> title}}</h1>
    <p>{{$book -> author}}</p>
    <p>{{$book -> description}}</p>
</div>
<a href=" {{ route('books.index') }}">Go home</a>
