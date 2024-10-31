<x-navbar></x-navbar>
<x-layout>
    <h1>Booklist</h1>

        <div>
            <form action="{{ route('books.index') }}" method="get">
                @csrf
                <input id="search" name="search" placeholder="Search for title or author">
                <button type="submit">Search</button>
            </form>
        </div>

        <div>
            @foreach ($books as $book)
                <h2>{{$book -> title}}</h2>
                <p>{{$book -> author}}</p>
                <a href="{{ route('books.show', $book -> id) }}">Details</a>
            @endforeach
        </div>



</x-layout>
