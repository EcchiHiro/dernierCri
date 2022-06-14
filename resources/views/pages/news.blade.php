@include('pages.partials.header')

<div class="spacer"></div>

<div class="container">

    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{$news->main_image}}" alt="{{$news->title}}">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">{{$news->title}}</h1>
            <p class="lead">
                {{$news->description}}
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{$news->external_url}}" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Voir sur site</a>
            </div>
        </div>
    </div>

</div>


@include('pages.partials.footer')
