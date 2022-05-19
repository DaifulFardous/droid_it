<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel=" shortcut icon" type="image/png" href="img/favicon.png">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/owl.theme.default.min.css') }}">

    <title>Natours | Exciting tours for adventurous people</title>
</head>

<body>


    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="footer__logo-box">
                <img src="{{ asset('assets/img/main/footer-logo.png') }}" class="footer__logo" />
            </div>

            <div class="footer__heading-box">
                <h1 class="footer__heading-main">Don't be shy</h1>
                <h2 class="footer__heading-sub">say hi!</h2>
            </div>

            <div class="footer__content-box">
                <div class="footer__address">
                    <p class="footer__address-sub">Start a conversation</p>
                    <a href="/" class="footer__address-email">hellodriodit@gmail.com</a>
                </div>

                <ul class="footer__nav-list">
                    <li class="footer__nav-item">
                        <a href="/" class="footer__nav-link">Home</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/" class="footer__nav-link">Services</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/" class="footer__nav-link">Work</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/" class="footer__nav-link">About Us</a>
                    </li>
                </ul>

                <ul class="footer__nav-list">
                    <li class="footer__nav-item">
                        <a href="/" class="footer__nav-link">Instagram</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/" class="footer__nav-link">Dribbble</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/" class="footer__nav-link">Behance</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/" class="footer__nav-link">Facebook</a>
                    </li>
                </ul>


            </div>
            <div class="footer__copyright">
                <p class="footer__copyright-text">Terms & Conditions</p>
                <p class="footer__copyright-text">All copyright reserved</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('asset/plugins/slick/owl.carousel.min.js') }}"></script>

    <script>
        $('.js--slider').owlCarousel({
            loop: false,
            margin: 10,
            nav: false,
            items: 1,
        })
    </script>

</body>

</html>
