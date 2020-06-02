@extends('layouts.app')

@section('content')
    <section id="section-okoboji">
    @include('okoboji.nav')

    <section id="catering" class="container">
        <p class="slide-text text-center"><span class="badge badge-secondary">Catering</span></p>
        <div class="catering text-center px-3 pb-3">
            <p>Kazarelli’s proudly offers catering services for any event.</p>
            <p>We strive to meet your individual needs by creating a menu that is specific to your event and budget.</p>
            <p>We cater all your special events such as weddings, reunions, holiday parties and graduations. </p>
            <p>Give us a call for your next event and let us create a menu your guests will love! </p>
        </div>
    </section>

    <section id="party" class="container mt-5">
        <p class="slide-text text-center"><span class="badge badge-secondary">Party Room</span></p>
        <div class="party-pics row">
            <div class="col-sm">
                <img src="/images/kazarellis-party.jpg">
            </div>
            <div class="col-sm">
                <img src="/images/kazarellis-party2.jpg">
            </div>
        </div>
    </section>

    @include('okoboji.footer')
    </section>
@endsection
