<x-navbar></x-navbar>
<x-layout>
    <form action="{{ route('reviews.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="content">Review</label>
            <textarea type="text" id="content" name="content"></textarea>
        </div>

        <div>
            <label for="image">Image</label>
            <textarea type="text" id="image" name="image"></textarea>
        </div>

        <x-primary-button type="submit">Create</x-primary-button>
    </form>
</x-layout>
