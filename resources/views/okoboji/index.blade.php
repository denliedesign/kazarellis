@extends('layouts.app')

@section('content')

    <section id="section-okoboji">
        @include('okoboji.nav')
        <div class="bd-example container" id="kaz-slide">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/dock.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="slide-text"><span class="badge badge-secondary">We are just a short walk from our lakeside dock</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/spinach.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="slide-text"><span class="badge badge-secondary">Fine dining at Iowa Great Lakes</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/mussels.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="slide-text"><span class="badge badge-secondary">Italian & American Cuisine</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/table.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="slide-text"><span class="badge badge-secondary">A relaxed, comfortable atmosphere</span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/hog.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="slide-text"><span class="badge badge-secondary">Let us cater your next event!</span></p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <hr>

        @include('photos')

        @include('okoboji.footer')
    </section>
@endsection
