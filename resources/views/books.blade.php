<x-navbar></x-navbar>
<x-layout>
{{--    @dd($books)--}}
{{--    @if(isset(auth()->user()->id) && $book->user_id === auth()->user()->id)--}}
    <h1>Booklist</h1>

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
{{--    @else--}}
{{--        @foreach ($books as $book)--}}
{{--            <h2>{{$book -> title}}</h2>--}}
{{--            <p>{{$book -> author}}</p>--}}
{{--            <a href="{{ route('books.show', $book -> id) }}">Details</a>--}}
{{--        @endforeach--}}

{{--    @endif--}}
</x-layout>
