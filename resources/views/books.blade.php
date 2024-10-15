<div>
{{--    <p>{{$book -> title}}</p>--}}
{{--    <p>{{$book -> author}}</p>--}}
{{--    <p>{{$books}}</p>--}}
    <?php
        foreach ($books as $book) { ?>
            <h1>{{$book -> title}}</h1>
            <p>{{$book -> author}}</p>
        <?php } ?>
</div>
