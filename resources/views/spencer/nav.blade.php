<nav class="p-3 d-flex justify-content-between">
    <div class="social-nav">
        <a href="https://www.facebook.com/Kazarellis-On-The-River-101646398000752/?modal=admin_todo_tour" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
    </div>
    <div>
        <ul style="list-style-type: none">
            @guest
                <li class="nav-item">
                    <a class="nav-link text-black-50" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>

<div class="container sticky-top kaznav" id="kaz-nav">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand d-none d-md-block" href="/spencer"><img id="logo" src="/images/spencer-logo.png" class="img-fluid" style="max-height: 105px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-4">
                    <a class="nav-link" href="/spencer">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="/spencer/spencermenu">Menus</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="/spencer/events">Events</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#footer">Contact</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="/">Locations</a>
                </li>
                <li class="nav-item mx-4">
                    <button type="button" class="btn btn-warning"><a id="order" class='chownow-order-online' href="https://ordering.chownow.com/order/10320/locations" target="_blank">Order Online</a></button>
                </li>
            </ul>
        </div>
    </nav>
</div>

<hr>
