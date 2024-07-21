<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', "Fine Dining at 2 Iowa locations. Whether its our BBQ Steakhouse or Italian & American Cuisine, enjoy a relaxed, comfortable atmosphere.")">
    <meta property="og:url" content="https://www.kazarellis.com">
    <meta property="og:title" content="Kazarelli's Restaurants | Okoboji & Spencer, IA">
    <meta property="og:description" content="Fine Dining at 2 Iowa locations. Whether its our BBQ Steakhouse or Italian & American Cuisine, enjoy a relaxed, comfortable atmosphere.">
    <meta property="og:image" content="https://kazarellis.com/images/mussels.jpg">

    <meta name="twitter:card" content="summary_large_image">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Kazarelli\'s Restaurants')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="https://cdn.tiny.cloud/1/5kctqg5sa09fd8d1o32j7i9xpvwu1wzubt2thxu7k565blzw/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Raleway:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

    @yield('content')

    <script src='https://cf.chownowcdn.com/latest/static/integrations/ordering-
modal.min.js' data-chownow-company-id=>23074</script>

</body>
</html>
