@extends('landing_pages.layouts.app')

@section('content')
    <header class="header">
        @include('landing_pages.components.navigation')

        <div class="header__content-secondary">
            <div class="header__text-box">
                <h1 class="heading-primary">Ui/Ux design for
                    Website, Mobile
                    & Web-Application</h1>

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

            <div class="header__slider-box">

                <div class="header__slider ">
                    <div class="owl-carousel owl-theme js--slider">
                        <div class="header__slider-item">
                            <img src="{{ asset('assets/img/uiux/header-img-one.png') }}" class="header__slider-img" />
                        </div>
                        <div class="header__slider-item">
                            <img src="{{ asset('assets/img/uiux/header-img-one.png') }}" class="header__slider-img" />
                        </div>
                        <div class="header__slider-item">
                            <img src="{{ asset('assets/img/uiux/header-img-one.png') }}" class="header__slider-img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="section-process">
            <div class="container">
                <div class="u-margin-bottom-medium">
                    <h2 class="heading-secondary">Process</h2>
                </div>

                <div class="process">
                    <div class="process__item">
                        <p class="process__text paragraph-primary">Research</p>
                    </div>
                    <div class="process__item">
                        <img src="{{ asset('assets/img/uiux/process-arrow.png') }}" alt="process arrow"
                            class="process__img" />
                    </div>
                    <div class="process__item">
                        <p class="process__text paragraph-primary">Survey</p>
                    </div>
                    <div class="process__item">
                        <img src="{{ asset('assets/img/uiux/process-arrow.png') }}" alt="process arrow"
                            class="process__img" />
                    </div>
                    <div class="process__item">
                        <p class="process__text paragraph-primary">Wire Frame</p>
                    </div>
                    <div class="process__item">
                        <img src="{{ asset('assets/img/uiux/process-arrow.png') }}" alt="process arrow"
                            class="process__img" />
                    </div>
                    <div class="process__item">
                        <p class="process__text paragraph-primary">High Feudality Prototype</p>
                    </div>
                    <div class="process__item">
                        <img src="{{ asset('assets/img/uiux/process-arrow.png') }}" alt="process arrow"
                            class="process__img" />
                    </div>
                    <div class="process__item">
                        <p class="process__text paragraph-primary">A/B Testing</p>
                    </div>
                    <div class="process__item">
                        <img src="{{ asset('assets/img/uiux/process-arrow.png') }}" alt="process arrow"
                            class="process__img" />
                    </div>
                    <div class="process__item">
                        <p class="process__text paragraph-primary">Development</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-portfolio">
            <div class="container">
                <div class="u-margin-bottom-medium">
                    <h2 class="heading-secondary">Our Portfolio</h2>
                </div>

                <div class="portfolio-list">
                    <div class="portfolio-card">
                        <div class="portfolio-card__main">
                            <img src="{{ asset('assets/img/portfolio/portfolio-one.png') }}"
                                class="portfolio-card__img" />
                        </div>

                        <div class="portfolio-card__hover">
                            <h4 class="portfolio-card__heading">Jarvis AI copy writer
                                (Website)</h4>
                            <div class="portfolio-card__btn-box">
                                <a href="/" class="btn-secondary">View Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-card">
                        <div class="portfolio-card__main">
                            <img src="{{ asset('assets/img/portfolio/portfolio-two.png') }}"
                                class="portfolio-card__img" />
                        </div>

                        <div class="portfolio-card__hover">
                            <h4 class="portfolio-card__heading">Jarvis AI copy writer
                                (Website)</h4>

                            <div class="portfolio-card__btn-box">
                                <a href="/" class="btn-secondary">View Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-card">
                        <div class="portfolio-card__main">
                            <img src="{{ asset('assets/img/portfolio/portfolio-three.png') }}"
                                class="portfolio-card__img" />
                        </div>

                        <div class="portfolio-card__hover">
                            <h4 class="portfolio-card__heading">Jarvis AI copy writer
                                (Website)</h4>

                            <div class="portfolio-card__btn-box">
                                <a href="/" class="btn-secondary">View Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-card">
                        <div class="portfolio-card__main">
                            <img src="{{ asset('assets/img/portfolio/portfolio-four.png') }}"
                                class="portfolio-card__img" />
                        </div>

                        <div class="portfolio-card__hover">
                            <h4 class="portfolio-card__heading">Jarvis AI copy writer
                                (Website)</h4>

                            <div class="portfolio-card__btn-box">
                                <a href="/" class="btn-secondary">View Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-card">
                        <div class="portfolio-card__main">
                            <img src="{{ asset('assets/img/portfolio/portfolio-one.png') }}"
                                class="portfolio-card__img" />
                        </div>

                        <div class="portfolio-card__hover">
                            <h4 class="portfolio-card__heading">Jarvis AI copy writer
                                (Website)</h4>

                            <div class="portfolio-card__btn-box">
                                <a href="/" class="btn-secondary">View Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-endcard">
                        <div class="portfolio-endcard__heading-box">
                            <h4 class="portfolio-endcard__heading">This spot is for you.<br>
                                Have an idea, fix this spot for
                                your project.</h4>

                            <img src="{{ asset('assets/img/service/stars/white-star.svg') }}"
                                class="portfolio-endcard__img-white" />
                        </div>

                        <div class="portfolio-endcard__btn-box">
                            <a href="#section-tours" class="btn-primary u-margin-top-medium">
                                <span class="btn-primary__text">Share your idea</span>

                                <span class="btn-primary__img-box">
                                    <img class="btn-primary__img"
                                        src="{{ asset('assets/img/header/feather-arrow-down-left.svg') }}"
                                        alt="button arrow">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
