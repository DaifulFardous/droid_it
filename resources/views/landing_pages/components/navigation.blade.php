<nav class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

    <div class="navigation__toggle-box">
        <label for="navi-toggle" class="navigation__button js__navigation-open">
            <div class="navigation__icon">&nbsp;</div>
        </label>
    </div>

    <div class="navigation__main">
        <div class="navigation__logo-box">
            <img src="{{ asset('assets/img/main/logo.png') }}" alt="Logo" class="navigation__logo">
        </div>


        <div class="navigation__navbar">
            <div class="navigation__btn-box">
                <a class="btn-tertiary btn-tertiary--white" href="{{ route('contact') }}">Contact us</a>
            </div>
        </div>
    </div>


    <div class="navigation__nav">
        <div class="navigation__main">
            <div class="navigation__logo-box">
                <img src="{{ asset('assets/img/main/footer-logo.png') }}" alt="Logo" class="navigation__logo">
            </div>

            <div class="navigation__navbar">
                <div class="navigation__btn-box">
                    <a class="btn-tertiary btn-tertiary--black" href="{{ route('contact') }}">Contact us</a>
                </div>

                <div class="navigation__toggle-box">
                    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
                </div>
            </div>
        </div>

        <div class="navigation__nav-body">
            <div class="navigation__list-box">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="/uiux" class="navigation__link"><span>01.</span>Services
                        </a>
                    </li>
                    <li class="navigation__item"><a href="/portfolio" class="navigation__link"><span>02.</span>Works</a>
                    </li>
                    <li class="navigation__item"><a href="/about-us" class="navigation__link"><span>03.</span>About
                            Us</a>
                    </li>
                    <li class="navigation__item"><a href="/blog" class="navigation__link"><span>04.</span>Blogs</a>
                    </li>
                    <li class="navigation__item"><a href="/contact" class="navigation__link"><span>05.</span>Contact</a>
                    </li>
                </ul>

                <div class="navigation__side-style">
                    <p class="navigation__side-text">Menu</p>
                    <div class="navigation__side-bar"></div>
                </div>
            </div>

            <div class="navigation__nav-address">
                <a href="/" class="navigation__nav-address-text">hellodriodit@gmail.com</a>
                <a href="/" class="navigation__nav-address-text">(+880) 1798407559</a>
            </div>
        </div>

        <ul class="navigation__social-list">
            <li>
                <a href="#" class="navigation__social-link">
                    <img src="{{ asset('assets/img/header/instagram-black.svg') }}" class="navigation__social-img">
                </a>
            </li>
            <li>
                <a href="#" class="navigation__social-link">
                    <img src="{{ asset('assets/img/header/dribbble-black.svg') }}" class="navigation__social-img">
                </a>
            </li>
            <li>
                <a href="#" class="navigation__social-link">
                    <img src="{{ asset('assets/img/header/behance-black.svg') }}" class="navigation__social-img">
                </a>
            </li>
            <li>
                <a href="#" class="navigation__social-link">
                    <img src="{{ asset('assets/img/header/whatsapp-black.svg') }}" class="navigation__social-img">
                </a>
            </li>
        </ul>
    </div>
</nav>
