
<x-navbar></x-navbar>
<div>
    @foreach($books as $book)
        <div>
            <h2>Title: {{ $book->title }}</h2>
            <p>Author: {{ $book->author }}</p>
        </div>

        <div>
            <form method="post" action="{{route('admin.update', $book->id)}}">
                @csrf
                @method('PUT')
                <x-active-button>{{ $book->active ? 'Visibility:Shown' : 'Visibility:Hidden' }}</x-active-button>
            </form>
        </div>
        <br>
    @endforeach

{{--    <h2>Toggle books</h2>--}}
{{--    <div>--}}
{{--        <form>--}}
{{--            @csrf--}}
{{--            @foreach($books as $book)--}}
{{--                <tr>--}}
{{--                    <th> {{ $book -> title }} :</th>--}}
{{--                    <th> {{ $book -> author }}</th><br>--}}
{{--                    <th>--}}
{{--                        <form action="{{ route('admin.update', $book -> id) }}" method="post">--}}
{{--                            @csrf--}}
{{--                            <button type="submit">--}}
{{--                                @if($book -> active)--}}
{{--                                    Activated--}}
{{--                                @else--}}
{{--                                    Deactivated--}}
{{--                                @endif--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </th>--}}
{{--                </tr>--}}

{{--            @endforeach--}}
{{--        </form>--}}
{{--    </div>--}}
</div>
