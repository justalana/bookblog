<x-navbar></x-navbar>
<x-layout>

    <div>
        <h1>{{$book -> title}}</h1>
        <p>{{$book -> author}}</p>
        <p>{{$book -> description}}</p>
    </div>

    <div>
        <a href="{{ route('reviews.create', $book -> id) }}">Write review</a>
    </div>

    <div>
        <a href="{{ route('books.edit', $book -> id) }}">Edit</a>
    </div>

    <div>
        <a href=" {{ route('books.index') }}">Go home</a>
    </div>

</x-layout>
