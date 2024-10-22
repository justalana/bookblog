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

    @if(isset(auth()->user()->id) && $book->user_id === auth()->user()->id)
        <div>
            <a href="{{ route('books.edit', $book -> id) }}">Edit</a>
        </div>

        <form action="{{ route('books.destroy', $book -> id) }}" method="post">
            @method('DELETE')
            @csrf
            <x-primary-button type="submit">Delete</x-primary-button>
        </form>
    @endif

    <div>
        <a href=" {{ route('books.index') }}">Go home</a>
    </div>

</x-layout>
