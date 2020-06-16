@extends('layouts.app')

@section('content')

    {{--    {{ $errors }}--}}

    <section id="section-spencer">
        @include('spencer.nav')
        <div class="container p-0">
            <div class="text-center p-3" id="menu-list-spencer">
                <div class="menu-item-underline-title"></div>
                <h1 class="text-uppercase">Kazarelli's On The River Menu</h1>
                <div class="menu-item-underline-title"></div>
                <h3 class="font-weight-bold text-uppercase mb-0 mt-3"><span class="text-dark">&mdash;&#9632;&#9632;</span> Appetizers <span class="text-dark">&#9632;&#9632;&mdash;</span></h3>
                @foreach($spencermenus->where('course', 'Appetizers') as $spencermenu)
                    <p><strong>{{ $spencermenu->item }}</strong><br>{{ $spencermenu->description }}</p>
                    @can('update', $spencermenu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('spencermenu.update', ['spencermenu' => $spencermenu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.spencermenu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="spencermenu/{{ $spencermenu->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan
                @endforeach
                <h3 class="font-weight-bold text-uppercase mb-0 mt-3"><span class="text-dark">&mdash;&#9632;&#9632;</span> Pub Fare <span class="text-dark">&#9632;&#9632;&mdash;</span></h3>
                @foreach($spencermenus->where('course', 'Pub Fare') as $spencermenu)
                    <p><strong>{{ $spencermenu->item }}</strong><br>{{ $spencermenu->description }}</p>
                    @can('update', $spencermenu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('spencermenu.update', ['spencermenu' => $spencermenu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.spencermenu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="spencermenu/{{ $spencermenu->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan
                @endforeach
                <h3 class="font-weight-bold text-uppercase mb-0 mt-3"><span class="text-dark">&mdash;&#9632;&#9632;</span> Sides <span class="text-dark">&#9632;&#9632;&mdash;</span></h3>
                @foreach($spencermenus->where('course', 'Sides') as $spencermenu)
                    <p><strong>{{ $spencermenu->item }}</strong><br>{{ $spencermenu->description }}</p>
                    @can('update', $spencermenu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('spencermenu.update', ['spencermenu' => $spencermenu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.spencermenu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="spencermenu/{{ $spencermenu->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan
                @endforeach
                <h3 class="font-weight-bold text-uppercase mb-0 mt-3"><span class="text-dark">&mdash;&#9632;&#9632;</span> Premium Sides <span class="text-dark">&#9632;&#9632;&mdash;</span></h3>
                @foreach($spencermenus->where('course', 'Premium Sides') as $spencermenu)
                    <p><strong>{{ $spencermenu->item }}</strong><br>{{ $spencermenu->description }}</p>
                    @can('update', $spencermenu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('spencermenu.update', ['spencermenu' => $spencermenu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.spencermenu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="spencermenu/{{ $spencermenu->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan
                @endforeach
                <div class="menu-desc-box mt-3 p-1">
                    <small>*** cooking foods of animal origin such as beef, eggs, fish, lamb pork poultry or shellfish reduces the risk of  food bourne illness. Individuals with certain health  conditions may be at higher risk of food bourne illness</small>
                </div>
                <h3 class="font-weight-bold text-uppercase mb-0 mt-3"><span class="text-dark">&mdash;&#9632;&#9632;</span> BBQ <span class="text-dark">&#9632;&#9632;&mdash;</span></h3>
                <p style="font-size: 1.05em">Served with a corn bread muffin and a choice of two sides</p>
            @foreach($spencermenus->where('course', 'BBQ') as $spencermenu)
                    <p><strong>{{ $spencermenu->item }}</strong><br>{{ $spencermenu->description }}</p>
                    @can('update', $spencermenu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('spencermenu.update', ['spencermenu' => $spencermenu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.spencermenu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="spencermenu/{{ $spencermenu->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan
                @endforeach
                <h3 class="font-weight-bold text-uppercase mb-0 mt-3"><span class="text-dark">&mdash;&#9632;&#9632;</span> Pastas <span class="text-dark">&#9632;&#9632;&mdash;</span></h3>
                <p style="font-size: 1.05em">Served with a choice of soup or salad (upgrade to caesar for $1)</p>
                @foreach($spencermenus->where('course', 'Pastas') as $spencermenu)
                    <p><strong>{{ $spencermenu->item }}</strong><br>{{ $spencermenu->description }}</p>
                    @can('update', $spencermenu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('spencermenu.update', ['spencermenu' => $spencermenu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.spencermenu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="spencermenu/{{ $spencermenu->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan
                @endforeach
                <h3 class="font-weight-bold text-uppercase mb-0 mt-3"><span class="text-dark">&mdash;&#9632;&#9632;</span> Steaks <span class="text-dark">&#9632;&#9632;&mdash;</span></h3>
                <p style="font-size: 1.05em">Served with a choice of soup or salad (upgrade to caesar for $1)</p>
                @foreach($spencermenus->where('course', 'Steaks') as $spencermenu)
                    <p><strong>{{ $spencermenu->item }}</strong><br>{{ $spencermenu->description }}</p>
                    @can('update', $spencermenu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('spencermenu.update', ['spencermenu' => $spencermenu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.spencermenu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="spencermenu/{{ $spencermenu->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan
                @endforeach
                <div class="menu-desc-box mt-3 p-1">
                    <small>For your convenience a gratuity will be added for parties of 8 or more.</small>
                </div>

            </div>
        </div>

        <hr>

        <div class="container" id="create-menu">
            @can('update', \App\Spencermenu::class)
                <div class="p-3">
                    <h2>New Menu Item</h2>
                    <form action="/spencer/spencermenu" method="POST">
                        @include('forms.spencermenu')
                        <button type="submit" class="btn btn-primary">Add Menu Item</button>
                    </form>
                </div>
            @endcan
        </div>



        {{--        <div id="menu" class="container">--}}
        {{--            <p class="slide-text text-center"><span class="badge badge-secondary">Menus</span></p>--}}
        {{--            <div class="row menu-wrap">--}}
        {{--                <div class="col-sm">--}}
        {{--                    <a href="/images/menu-front.pdf" target="_blank"><img src="/images/menu-front.jpg"></a>--}}
        {{--                </div>--}}
        {{--                <div class="col-sm">--}}
        {{--                    <a href="/images/menu-back.pdf" target="_blank"><img src="/images/menu-back.jpg"></a>--}}
        {{--                </div>--}}
        {{--                <div class="col-sm">--}}
        {{--                    <a href="/images/menu-kids.pdf" target="_blank"><img src="/images/menu-kids.jpg"></a>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        @include('spencer.footer')
    </section>

@endsection
