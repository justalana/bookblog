<nav class="p-2">
    <x-navlink href="{{ route('books.index') }}" :active="request()->is('books')">Books</x-navlink>
{{--    <x-navlink href="{{ route('about') }}" :active="request()->is('about')">About</x-navlink>--}}

    @guest
        <x-navlink href="{{ route('login') }}" :active="request()->is('login')">Login</x-navlink>
        <x-navlink href="{{ route('register') }}" :active="request()->is('register')">Register</x-navlink>
    @endguest

    @auth
        @if(auth()->user()->is_admin === 1)
            <x-navlink href="{{ route('admin.index') }}" :active="request()->is('admin')">Toggle Books</x-navlink>
        @endif
        <x-navlink href="{{ route('profile.edit') }}" :active="request()->is('profile.edit')">Profile</x-navlink>
        <x-navlink href="{{ route('books.create') }}" :active="request()->is('books.create')">Add New Book</x-navlink>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <x-primary-button type="submit">Logout</x-primary-button>
        </form>

    @endauth
</nav>
