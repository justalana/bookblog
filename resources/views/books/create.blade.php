<x-navbar></x-navbar>
<x-layout>
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div>
            <x-input-label for="title">Title</x-input-label>
            <x-text-input type="text" id="title" name="title" value="{{ old('title') }}"/>
            @error('title')
            <span>{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="author">Author</label>
            <input type="text" id="author" name="author" value="{{ old('author') }}">
            @error('author')
            <span>{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea type="text" id="description" name="description">{{old('description')}}</textarea>
            @error('description')
            <span>{{$message}}</span>
            @enderror
        </div>

        <x-primary-button type="submit">Create</x-primary-button>
    </form>
</x-layout>
