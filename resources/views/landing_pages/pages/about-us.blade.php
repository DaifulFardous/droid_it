@extends('landing_pages.layouts.app')

@section('content')
    <header class="header-about">
        @include('landing_pages.components.navigation')

        <div class="header-about__content">
            <div class="header-about__text-box">
                <h1 class="heading-primary">Together we are the definition of awesomeness. </h1>

                <p class="paragraph-primary">We create impactful digital experiences that attract and engage.
                    Check out our work below or learn more about what we do.</p>

                <a href="#section-tours" class="btn-primary u-margin-top-medium">
                    <span class="btn-primary__text">Get free colsultation</span>

                    <span class="btn-primary__img-box">
                        <img class="btn-primary__img" src="{{ asset('assets/img/header/feather-arrow-down-left.svg') }}"
                            alt="button arrow">
                    </span>
                </a>

            </div>

            <div class="header-about__img-box">
                <img class="header-about__img" src="{{ asset('assets/img/about-us/header-about-us.png') }}"
                    alt="landing header image" />

                <div class="header-about__creative-logo">
                    <div class="header-about__creative-logo-inner">
                        <div class="header-about__text-circle-box">
                            <img src="{{ asset('assets/img/about-us/about-us-circle.png') }}"
                                class="header-about__text-circle-img" alt="circle text" />
                        </div>
                        <div class="header-about__star-box">
                            <img src="{{ asset('assets/img/about-us/about-us-feather-arrow-down-right.png') }}"
                                class="header-about__star-img" alt="star" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="header-about__social-list">
            <li>
                <a href="#" class="header-about__social-link">
                    <img src="{{ asset('assets/img/header/instagram.svg') }}" class="header-about__social-img">
                </a>
            </li>
            <li>
                <a href="#" class="header-about__social-link">
                    <img src="{{ asset('assets/img/header/dribbble.svg') }}" class="header-about__social-img">
                </a>
            </li>
            <li>
                <a href="#" class="header-about__social-link">
                    <img src="{{ asset('assets/img/header/behance.svg') }}" class="header-about__social-img">
                </a>
            </li>
            <li>
                <a href="#" class="header-about__social-link">
                    <img src="{{ asset('assets/img/header/whatsapp.svg') }}" class="header-about__social-img">
                </a>
            </li>
        </ul>
    </header>

    <main>
        <section class="section-agency">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__heading section-header__heading--1">
                        <h2 class="heading-secondary">Our Agency</h2>
                        <img src="{{ asset('assets/img/service/stars/red-star.svg') }}" class="section-header__img-red" />
                        <img src="{{ asset('assets/img/service/stars/white-star.svg') }}"
                            class="section-header__img-white" />
                    </div>

                    <p class="paragraph-primary">We create impactful digital experiences that attract and engage.
                        Check out our work below or learn more about what we do.</p>
                </div>

                <div class="agency-process-list">
                    <div class="agency-process">
                        <div class="agency-process__text-box agency-process__text-box--left">
                            <h2 class="heading-secondary u-margin-bottom-small">Research<br> for the best</h2>

                            <p class="paragraph-primary">We create impactful digital experiences that
                                attract and engage. below or learn more about
                                what we do.</p>

                            <div class="agency-process__number-box--1">
                                <img src="{{ asset('assets/img/about-us/one.svg') }}"
                                    class="agency-process__number-img" />
                            </div>
                        </div>
                        <div class="agency-process__img-box">
                            <img src="{{ asset('assets/img/about-us/process-one-img.svg') }}"
                                class="agency-process__img" />
                        </div>
                    </div>

                    <div class="agency-process">
                        <div class="agency-process__img-box">
                            <img src="{{ asset('assets/img/about-us/process-two-img.svg') }}"
                                class="agency-process__img" />
                        </div>

                        <div class="agency-process__text-box agency-process__text-box--right">
                            <h2 class="heading-secondary u-margin-bottom-small">Design for<br> the product</h2>

                            <p class="paragraph-primary">We create impactful digital experiences that
                                attract and engage. below or learn more about
                                what we do.</p>

                            <div class="agency-process__number-box--2">
                                <img src="{{ asset('assets/img/about-us/two.svg') }}"
                                    class="agency-process__number-img" />
                            </div>
                        </div>
                    </div>

                    <div class="agency-process">
                        <div class="agency-process__text-box agency-process__text-box--left">
                            <h2 class="heading-secondary u-margin-bottom-small">Develop for<br> user to us</h2>

                            <p class="paragraph-primary">We create impactful digital experiences that
                                attract and engage. below or learn more about
                                what we do.</p>

                            <div class="agency-process__number-box--3">
                                <img src="{{ asset('assets/img/about-us/three.svg') }}"
                                    class="agency-process__number-img" />
                            </div>
                        </div>
                        <div class="agency-process__img-box">
                            <img src="{{ asset('assets/img/about-us/process-three-img.svg') }}"
                                class="agency-process__img" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-team">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__heading section-header__heading--2">
                        <h2 class="heading-secondary">Meet with Us</h2>
                        <img src="{{ asset('assets/img/service/stars/red-star.svg') }}" class="section-header__img-red">
                        <img src="{{ asset('assets/img/service/stars/white-star.svg') }}"
                            class="section-header__img-white">
                    </div>

                    <p class="paragraph-primary">We create impactful digital experiences that attract and engage.
                        Check out our work below or learn more about what we do.</p>
                </div>

                <div class="team-list">
                    <div class="team-card">
                        <div class="team-card__main">
                            <img src="{{ asset('assets/img/team/team-one.png') }}" class="team-card__img">
                        </div>

                        <div class="team-card__hover">
                            <div class="team-card__text-box">
                                <h4 class="team-card__heading">Adnan Zubair</h4>

                                <p class="team-card__sub-heading">Sr. Product Designer</p>
                            </div>

                            <div class="team-card__social-box">
                                <ul class="team-card__social-list">
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/instagram.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/dribbble.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/behance.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="team-card__main">
                            <img src="{{ asset('assets/img/team/team-one.png') }}" class="team-card__img">
                        </div>

                        <div class="team-card__hover">
                            <div class="team-card__text-box">
                                <h4 class="team-card__heading">Adnan Zubair</h4>

                                <p class="team-card__sub-heading">Sr. Product Designer</p>
                            </div>

                            <div class="team-card__social-box">
                                <ul class="team-card__social-list">
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/instagram.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/dribbble.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/behance.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="team-card__main">
                            <img src="{{ asset('assets/img/team/team-one.png') }}" class="team-card__img">
                        </div>

                        <div class="team-card__hover">
                            <div class="team-card__text-box">
                                <h4 class="team-card__heading">Adnan Zubair</h4>

                                <p class="team-card__sub-heading">Sr. Product Designer</p>
                            </div>

                            <div class="team-card__social-box">
                                <ul class="team-card__social-list">
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/instagram.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/dribbble.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/behance.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="team-card__main">
                            <img src="{{ asset('assets/img/team/team-one.png') }}" class="team-card__img">
                        </div>

                        <div class="team-card__hover">
                            <div class="team-card__text-box">
                                <h4 class="team-card__heading">Adnan Zubair</h4>

                                <p class="team-card__sub-heading">Sr. Product Designer</p>
                            </div>

                            <div class="team-card__social-box">
                                <ul class="team-card__social-list">
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/instagram.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/dribbble.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/behance.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="team-card__main">
                            <img src="{{ asset('assets/img/team/team-one.png') }}" class="team-card__img">
                        </div>

                        <div class="team-card__hover">
                            <div class="team-card__text-box">
                                <h4 class="team-card__heading">Adnan Zubair</h4>

                                <p class="team-card__sub-heading">Sr. Product Designer</p>
                            </div>

                            <div class="team-card__social-box">
                                <ul class="team-card__social-list">
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/instagram.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/dribbble.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/behance.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="team-card__main">
                            <img src="{{ asset('assets/img/team/team-one.png') }}" class="team-card__img">
                        </div>

                        <div class="team-card__hover">
                            <div class="team-card__text-box">
                                <h4 class="team-card__heading">Adnan Zubair</h4>

                                <p class="team-card__sub-heading">Sr. Product Designer</p>
                            </div>

                            <div class="team-card__social-box">
                                <ul class="team-card__social-list">
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/instagram.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/dribbble.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/behance.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="team-card__main">
                            <img src="{{ asset('assets/img/team/team-one.png') }}" class="team-card__img">
                        </div>

                        <div class="team-card__hover">
                            <div class="team-card__text-box">
                                <h4 class="team-card__heading">Adnan Zubair</h4>

                                <p class="team-card__sub-heading">Sr. Product Designer</p>
                            </div>

                            <div class="team-card__social-box">
                                <ul class="team-card__social-list">
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/instagram.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/dribbble.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/behance.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="team-card__main">
                            <img src="{{ asset('assets/img/team/team-one.png') }}" class="team-card__img">
                        </div>

                        <div class="team-card__hover">
                            <div class="team-card__text-box">
                                <h4 class="team-card__heading">Adnan Zubair</h4>

                                <p class="team-card__sub-heading">Sr. Product Designer</p>
                            </div>

                            <div class="team-card__social-box">
                                <ul class="team-card__social-list">
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/instagram.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/dribbble.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="team-card__social-link">
                                            <img src="{{ asset('assets/img/header/behance.svg') }}"
                                                class="team-card__social-img">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-skills">
            <div class="rotating-image-box">
            </div>
        </section>
    </main>
@endsection
