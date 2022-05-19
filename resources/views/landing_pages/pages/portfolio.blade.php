@extends('landing_pages.layouts.app')

@section('content')
    <header class="header-portfolio">
        @include('landing_pages.components.navigation')

        <div class="header-portfolio__content">
            <div class="container">
                <div class="header-portfolio__inner">
                    <div class="portfolio-margin-bottom-big">
                        <h2 class="heading-secondary">Website</h2>
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
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="section-website">
            <div class="container">
                <div class="portfolio-margin-bottom-big">
                    <h2 class="heading-secondary">Website</h2>
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
                                        src="{{ asset('assets/img/header/feather-arrow-down-left.svg') }}   "
                                        alt="button arrow">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-social">
            <div class="container">
                <div class="portfolio-margin-bottom-big">
                    <h2 class="heading-secondary">Banner & Social Media</h2>
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
    @endsection
