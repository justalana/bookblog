<x-layout>
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="author">Author</label>
            <input type="text" id="author" name="author">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea type="text" id="description" name="description"></textarea>
        </div>

        <x-primary-button type="submit">Create</x-primary-button>
    </form>
</x-layout>
