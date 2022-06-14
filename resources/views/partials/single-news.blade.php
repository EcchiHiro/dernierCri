

<div class="col">
    <div class="card shadow-sm">
        <img src="{{$singleNews->thumbnail_image}}" alt="{{$singleNews->title}}" style="max-width: 150px">

        <div class="card-body">
            <h2>{{$singleNews->title}}</h2>

            <p class="card-text">
                {{ trim_text($singleNews->description, 100, ' [...]') }}
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{$singleNews->url}}" class="btn btn-sm btn-outline-secondary">Lire plus</a>
                </div>
            </div>
        </div>
    </div>
</div>
