@include('pages.partials.header')

<section>
    <div class="list">
        @foreach($news as $singleNews)
            @include('partials.single-news')
        @endforeach
    </div>

    {{$news->links()}}
</section>


@include('pages.partials.footer')
