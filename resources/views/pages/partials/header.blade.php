@include('pages.partials.head')

<div class="header">
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}">Accueil</a>
                <a href="{{route('news.fetch', ['news_type'  => 'nyTimes'])}}">Import NewYork Times news</a>
            </li>
        </ul>
    </nav>
</div>
