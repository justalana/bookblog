<x-navbar></x-navbar>
<x-layout>
    <h1>Booklist</h1>


        @foreach ($books as $book)
                <h2>{{$book -> title}}</h2>
                <p>{{$book -> author}}</p>
                <a href="{{ route('books.show', $book -> id) }}">Details</a>
                <a href="{{ route('books.edit', $book -> id) }}">Edit</a>

                <form action="{{ route('books.destroy', $book -> id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <x-primary-button type="submit">Delete</x-primary-button>
                </form>



        @endforeach

</x-layout>
