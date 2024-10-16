<x-navbar></x-navbar>
<div>
    <h1>Booklist</h1>
    <a href="{{route('books.create')}}">Create book</a>
        @foreach ($books as $book)
            <h2>{{$book -> title}}</h2>
            <p>{{$book -> author}}</p>
            <a href="{{ route('books.show', $book -> id) }}">Details</a>
            <form action="{{ route('books.destroy', $book -> id) }}" method="post">
                @method('DELETE')
                @csrf
                <x-primary-button type="submit">Delete</x-primary-button>
            </form>
        @endforeach

</div>
