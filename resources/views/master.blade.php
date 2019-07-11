<pre>
<?php
    $user = \Illuminate\Support\Facades\Auth::user();
    ?>
</pre>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Styles -->
    <link href="http://localhost/fashion/resources/sass/master_client.css" rel="stylesheet" type="text/css"/>

    {{-- Icon taskbar --}}
    <link rel="shortcut icon" href="{{ asset('images/logo/logo.jpg') }}">
</head>
<body>

<header>
    <div id="header-navigation">
        <div id="logo"><a href="{!! url('/') !!}"><img src="http://localhost/fashion/public/images/logo/logo.jpg" alt=""></a></div>
        <div id="menu-wrapper">
            <div id="main-menu">
                <ul>
                    <li><a href="{!! url('/') !!}">Home</a></li>
                    <li><a href="#">About US</a></li>
                    <li><a href="{{ url('products')  }}">Products</a></li>
                    <li><a href="{{ url('portfolio')  }}">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div id="user-action">
                <form action="">
                    <i class="fa fa-search"></i>
                </form>
            </div>
        </div>
    </div>
</header>


@yield('content')


<footer>
    <div class="box-footer" id="social-media"></div>
    <div class="box-footer" id="main-footer">
        <div>
            <p class="title-link">Fashion</p>
            <ul>
                <li><a href="">Link 1</a></li>
                <li><a href="">Link 2</a></li>
                <li><a href="">Link 3</a></li>
                <li><a href="">Link 4</a></li>
            </ul>
        </div>
        <div>
            <p class="title-link">Fashion</p>
            <ul>
                <li><a href="">Link 1</a></li>
                <li><a href="">Link 2</a></li>
                <li><a href="">Link 3</a></li>
                <li><a href="">Link 4</a></li>
            </ul>
        </div>
        <div>
            <p class="title-link">Fashion</p>
            <ul>
                <li><a href="">Link 1</a></li>
                <li><a href="">Link 2</a></li>
                <li><a href="">Link 3</a></li>
                <li><a href="">Link 4</a></li>
            </ul>
        </div>
        <div>
            <p class="title-link">Contact</p>
            {{--<p class="contact-details"><i class="fa fa-home"></i> {!! $web[0]['address'] !!} </p>--}}
            {{--<p class="contact-details"><i class="fa fa-phone"></i> {!! $web[0]['phone_number'] !!} </p>--}}
            {{--<p class="contact-details"><i class="fa fa-envelope"></i> {!! $web[0]['facebook'] !!} </p>--}}
        </div>
    </div>
    <div class="box-footer" id="coppy-right">
        <p>Coppy right &copy; 2018. All rights reserved by, Dang Minh</p>
    </div>
</footer>
@yield('script')
<script>
    <?php
    if (session()->has('message')) {
    ?>
    alert("{{session()->get('message')}}")
    <?php
    }
    ?>
</script>
</body>
</html>
