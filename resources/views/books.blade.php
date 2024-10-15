<div>
{{--    <p>{{$book -> title}}</p>--}}
{{--    <p>{{$book -> author}}</p>--}}
{{--    <p>{{$books}}</p>--}}


        @foreach ($books as $book)
            <h1>{{$book -> title}}</h1>
            <p>{{$book -> author}}</p>
            <a href="{{ route('books.show', $book -> id) }}">Details</a>
        @endforeach

</div>
