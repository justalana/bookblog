<x-navbar></x-navbar>
<x-layout>
    <h1>Booklist</h1>

        @foreach ($books as $book)
                <h2>{{$book -> title}}</h2>
                <p>{{$book -> author}}</p>
                <a href="{{ route('books.show', $book -> id) }}">Details</a>
        @endforeach

</x-layout>
