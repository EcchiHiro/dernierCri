@include('pages.partials.header')

<div class="spacer"></div>

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($news as $singleNews)
            @include('partials.single-news')
        @endforeach
    </div>

    {{$news->links()}}
</div>


@include('pages.partials.footer')
