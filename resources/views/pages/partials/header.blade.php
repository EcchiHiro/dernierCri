@include('pages.partials.head')

<header>
    <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link link-dark px-2" aria-current="page">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('news.fetch', ['news_type'  => 'nyTimes'])}}" class="nav-link link-dark px-2">Import NewYork Times news</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

@include('pages.partials.flashMessages')

