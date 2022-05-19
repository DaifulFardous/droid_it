@extends('landing_pages.layouts.app')

@section('content')
    <header class="header-blog">
        @include('landing_pages.components.navigation')

        <div class="header-blog__content">
            <div class="header-blog__text-box">
                <p class="header-blog__data">29 January, 2021</p>

                <h1 class="heading-primary">Tips and recommendation on design projects</h1>

                <p class="paragraph-primary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                    accusam et justo duo dolores et ea rebum.</p>

                <a href="#section-tours" class="btn-primary u-margin-top-medium">
                    <span class="btn-primary__text">Read more</span>

                    <span class="btn-primary__img-box">
                        <img class="btn-primary__img" src="{{ asset('assets/img/header/feather-arrow-down-left.svg') }}"
                            alt="button arrow">
                    </span>
                </a>

            </div>

            <div class="header-blog__img-box">
                <img class="header-blog__img" src="{{ asset('assets/img/blog/blog-header.png') }}"
                    alt="landing header image" />

                <div class="header-blog__creative-logo">
                    <div class="header-blog__creative-logo-inner">
                        <div class="header-blog__text-circle-box">
                            <img src="{{ asset('assets/img/header/text-circle.svg') }}"
                                class="header-blog__text-circle-img" alt="circle text" />
                        </div>
                        <div class="header-blog__star-box">
                            <img src="{{ asset('assets/img/header/start.svg') }}" class="header-blog__star-img"
                                alt="star" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="section-blogs">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__heading section-header__heading--3">
                        <h2 class="heading-secondary">Blogs only for You</h2>
                        <img src="{{ asset('assets/img/service/stars/red-star.svg') }}" class="section-header__img-red" />
                        <img src="{{ asset('assets/img/service/stars/white-star.svg') }}"
                            class="section-header__img-white" />
                    </div>

                    <p class="paragraph-primary">We create impactful digital experiences that attract and engage.
                        Check out our work below or learn more about what we do.</p>
                </div>

                <div class="blog-list">
                    <div class="blog">
                        <div class="blog__img-box">
                            <img src="{{ asset('assets/img/blogs/blog-two.png') }}" class="blog__img" />
                        </div>
                        <div class="blog__content">
                            <div class="blog__header">
                                <div class="blog__heading-box">
                                    <h4 class="blog__heading-text">Best way to choose the
                                        perfect logo.</h4>
                                </div>
                                <p class="blog__date">29 January, 2021</p>
                            </div>

                            <div class="blog__body">
                                <p class="paragraph-primary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                    diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>

                                <div class="blog__btn-box">
                                    <a href="/blog/jsdljflsdjflsjd" class="btn-learnmore">
                                        <span class="btn-learnmore__content">Learn More</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                            viewBox="0 0 13.705 13.652" class="btn-learnmore__img">
                                            <g id="Icon_feather-arrow-down-left" data-name="Icon feather-arrow-down-left"
                                                transform="translate(12.705 12.943) rotate(-180)">
                                                <path id="Path_13" data-name="Path 13" d="M12,0,0,11.943"
                                                    transform="translate(0)" fill="none" stroke-linejoin="round"
                                                    stroke-width="2" />
                                                <path id="Path_14" data-name="Path 14" d="M8.946,8.9H0V0"
                                                    transform="translate(0 3.04)" fill="none" stroke-linejoin="round"
                                                    stroke-width="2" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog">
                        <div class="blog__img-box">
                            <img src="{{ asset('assets/img/blogs/blog-one.png') }}" class="blog__img" />
                        </div>
                        <div class="blog__content">
                            <div class="blog__header">
                                <div class="blog__heading-box">
                                    <h4 class="blog__heading-text">Best way to choose the
                                        perfect logo.</h4>
                                </div>
                                <p class="blog__date">29 January, 2021</p>
                            </div>

                            <div class="blog__body">
                                <p class="paragraph-primary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                    diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>

                                <div class="blog__btn-box">
                                    <a href="/blog/jsldjflsd" class="btn-learnmore">
                                        <span class="btn-learnmore__content">Learn More</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                            viewBox="0 0 13.705 13.652" class="btn-learnmore__img">
                                            <g id="Icon_feather-arrow-down-left" data-name="Icon feather-arrow-down-left"
                                                transform="translate(12.705 12.943) rotate(-180)">
                                                <path id="Path_13" data-name="Path 13" d="M12,0,0,11.943"
                                                    transform="translate(0)" fill="none" stroke-linejoin="round"
                                                    stroke-width="2" />
                                                <path id="Path_14" data-name="Path 14" d="M8.946,8.9H0V0"
                                                    transform="translate(0 3.04)" fill="none" stroke-linejoin="round"
                                                    stroke-width="2" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
