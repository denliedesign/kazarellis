@extends('layouts.app')

@section('content')

{{--    {{ $errors }}--}}

    <section id="section-okoboji">
        @include('okoboji.nav')
        <div class="container p-0">
            <div class="text-center p-3" id="menu-list">
                <h1 class="text-red text-uppercase">Kazarelli's Menu</h1>
                <h3 class="font-italic text-green text-uppercase mb-0 mt-3">Appetizers</h3>
                <div class="menu-item-underline"></div>
                @foreach($menus->where('course', 'Appetizers') as $menu)
                    <p><strong>{{ $menu->item }}</strong><br>{{ $menu->description }}</p>
                    @can('update', $menu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('menu.update', ['menu' => $menu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.menu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="menu/{{ $menu->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan
                @endforeach
                <h3 class="font-italic text-green text-uppercase mb-0 mt-3">Salads</h3>
                <div class="menu-item-underline"></div>
                @foreach($menus->where('course', 'Salads') as $menu)
                    <p><strong>{{ $menu->item }}</strong><br>{{ $menu->description }}</p>
                    @can('update', $menu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('menu.update', ['menu' => $menu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.menu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="menu/{{ $menu->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan
                @endforeach
                <h3 class="font-italic text-uppercase text-green mb-0 mt-3">Sandwiches</h3>
                <div class="menu-item-underline"></div>
                @foreach($menus->where('course', 'Sandwiches') as $menu)
                    <p><strong>{{ $menu->item }}</strong><br>{{ $menu->description }}</p>
                    @can('update', $menu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('menu.update', ['menu' => $menu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.menu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="menu/{{ $menu->id }}" method="POST">
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
                <h3 class="font-italic text-uppercase text-green mb-0 mt-3">Entrées</h3>
                <div class="menu-item-underline"></div>
                <p style="font-size: 1.05em">All entrées will be served with a choice of Soup or Salad. Bread will be served upon request.</p>
                @foreach($menus->where('course', 'Entrees') as $menu)
                    <p><strong>{{ $menu->item }}</strong><br>{{ $menu->description }}</p>
                    @can('update', $menu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('menu.update', ['menu' => $menu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.menu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="menu/{{ $menu->id }}" method="POST">
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
                    <small>For those of you that may want to eat light, Kazarelli's offers certain items marked with a star as smaller portions for $4 off. Entrées not marked may be split for only an additional $6.</small>
                </div>
                <h3 class="font-italic text-uppercase text-green mb-0 mt-3">Beverages</h3>
                <div class="menu-item-underline"></div>
                @foreach($menus->where('course', 'Beverages') as $menu)
                    <p><strong>{{ $menu->item }}</strong><br>{{ $menu->description }}</p>
                    @can('update', $menu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('menu.update', ['menu' => $menu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.menu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="menu/{{ $menu->id }}" method="POST">
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
                    <small>***We will be happy to make gluten free or vegetarian entrées. Please ask your server.</small>
                </div>
                <div class="menu-desc-box mt-3 p-1">
                    <small>For your convenience a gratuity will be added for parties of 8 or more.</small>
                </div>
                <h3 class="font-italic text-uppercase text-green mb-0 mt-3">Kid's Menu <span style="font-size: 0.6em;" class="text-black-50 text-lowercase">12 yrs & under</span></h3>
                <div class="menu-item-underline"></div>
                <p class="m-0 p-0" style="font-size: 1.05em">All meals are served with a fountain pop. Ask about our bottled soda flavors!</p>
                @foreach($menus->where('course', 'Kid\'s Menu') as $menu)
                    <p><strong>{{ $menu->item }}</strong><br>{{ $menu->description }}</p>
                    @can('update', $menu)
                        <div class="dropdown pb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Item
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                <div>
                                    <form action="{{ route('menu.update', ['menu' => $menu]) }}" method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.menu')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="menu/{{ $menu->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan
                @endforeach
            </div>
        </div>

        <hr>

        <div class="container" id="create-menu">
            @can('update', \App\Menu::class)
                <div class="p-3">
                    <h2>New Menu Item</h2>
                    <form action="/okoboji/menu" method="POST">
                        @include('forms.menu')
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
        @include('okoboji.footer')
    </section>

@endsection
