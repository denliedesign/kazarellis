@extends('layouts.app')

@section('content')

    <section id="section-welcome" class="d-none d-lg-block">
        <div class="row m-0" style="background: rgba(0, 0, 0, 0.8)">
            <div class="col p-0">
                <a href="okoboji"><img src="/images/welcome-okoboji.jpg" alt="" style="height: 50vh; border-bottom: 2px solid transparent;" class="welcome-img"></a>
                <a href="spencer"><img src="/images/welcome-spencer.jpg" alt="" style="height: 50vh; border-top: 2px solid transparent;" class="welcome-img"></a>

            </div>
            <div class="col p-0">
                <div style="height: 50vh;" class="d-flex align-items-center justify-content-center">
                    <a href="okoboji">
                        <img src="/images/okoboji-logo.png" alt="" class="img-fluid" style="max-width: 275px; background: white; border-radius: 5px; border: 4px solid black; padding: 2px;">
                        <br><br>
                        <p class="text-white text-center">continue to our <span class="text-uppercase text-orange font-weight-bold">Okoboji, IA</span> location</p>
                    </a>
                </div>
                <div style="height: 50vh;" class="d-flex align-items-center justify-content-center">
                    <a href="spencer">
                        <img src="/images/spencer-logo.png" alt="" class="img-fluid" style="max-width: 275px;">
                        <br><br>
                        <p class="text-white text-center">continue to our <span class="text-uppercase text-orange font-weight-bold">Spencer, IA</span> location</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-welcome" class="d-block d-lg-none">
        <div class="d-flex justify-content-center pt-3" style="background: rgba(0, 0, 0, 0.8);">
            <a href="okoboji">
                <img src="/images/okoboji-logo.png" alt="" class="img-fluid" style="max-width: 275px; background: white; border-radius: 5px; border: 4px solid black; padding: 2px;">
                <br><br>
                <p class="text-white text-center">continue to our <span class="text-uppercase text-orange font-weight-bold">Okoboji, IA</span> location</p>
            </a>
        </div>
        <div>
            <a href="okoboji"><img src="/images/welcome-okoboji.jpg" alt="" style="width: 100%;" class="welcome-img"></a>
        </div>
        <div class="d-flex justify-content-center pt-3" style="background: rgba(0, 0, 0, 0.8);">
            <a href="spencer">
                <img src="/images/spencer-logo.png" alt="" class="img-fluid" style="max-width: 275px;">
                <br><br>
                <p class="text-white text-center">continue to our <span class="text-uppercase text-orange font-weight-bold">Spencer, IA</span> location</p>
            </a>
        </div>
        <div>
            <a href="spencer"><img src="/images/welcome-spencer.jpg" alt="" style="width: 100%;" class="welcome-img"></a>
        </div>
    </section>

@endsection
