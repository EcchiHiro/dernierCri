<div class="single-element">
    <div class="single-element__header">
        <h2>{{$singleNews->title}}</h2>
        <img src="{{$singleNews->thumbnail_image}}" alt="{{$singleNews->title}}">
    </div>

    <div class="single-element__body">
        {{ trim_text($singleNews->description, 100, ' [...]') }}
    </div>

    <div class="single-element__footer">
        <a href="{{$singleNews->url}}">Lire plus</a>
    </div>
</div>
