@extends('landing_pages.layouts.app')

@section('content')
    <header class="header-blog">
        @include('landing_pages.components.navigation')
    </header>

    <main>
        <section class="section-blog-single">
            <div class="container">
                <div class="blog-single">
                    <div class="blog-single__header">
                        <p class="blog-single__date">29 January, 2021</p>
                        <h1 class="heading-primary">How to Hire a UX and UI Designer Via Internet?</h1>

                        <div class="blog-single__tag-box">
                            <a href="#" class="blog-single__tag">#UI_UX</a>
                            <a href="#" class="blog-single__tag">#design_agency</a>
                            <a href="#" class="blog-single__tag">#design</a>
                            <a href="#" class="blog-single__tag">#Process</a>
                        </div>

                        <div class="blog-single__img-box">
                            <img src="{{ asset('assets/img/blog/blog-header.png') }}" class="blog-single__img" />
                        </div>
                    </div>

                    <div class="blog-single__body">
                        <p class="paragraph-primary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis
                            quasi corrupti ipsum unde sit pariatur et quos eveniet necessitatibus nisi atque, quis
                            quidem
                            maiores nostrum rerum! Temporibus labore cum assumenda.</p>

                        <p class="paragraph-primary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis
                            quasi corrupti ipsum unde sit pariatur et quos eveniet necessitatibus nisi atque, quis
                            quidem
                            maiores nostrum rerum! Temporibus labore cum assumenda.</p>

                        <p class="paragraph-primary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis
                            quasi corrupti ipsum unde sit pariatur et quos eveniet necessitatibus nisi atque, quis
                            quidem
                            maiores nostrum rerum! Temporibus labore cum assumenda.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-blogs">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__heading section-header__heading--3">
                        <h2 class="heading-secondary">Blogs only for You</h2>
                        <img src="{{ asset('assets/img/service/stars/red-star.svg') }}" class="section-header__img-red">
                        <img src="{{ asset('assets/img/service/stars/white-star.svg') }}"
                            class="section-header__img-white">
                    </div>

                    <p class="paragraph-primary">We create impactful digital experiences that attract and engage.
                        Check out our work below or learn more about what we do.</p>
                </div>

                <div class="blog-list">
                    <div class="blog">
                        <div class="blog__img-box">
                            <img src="{{ asset('assets/img/blogs/blog-two.png') }}" class="blog__img">
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
                                    <a href="/blog/kjsdlfjs" class="btn-learnmore">
                                        <span class="btn-learnmore__content">Learn More</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                            viewBox="0 0 13.705 13.652" class="btn-learnmore__img">
                                            <g id="Icon_feather-arrow-down-left" data-name="Icon feather-arrow-down-left"
                                                transform="translate(12.705 12.943) rotate(-180)">
                                                <path id="Path_13" data-name="Path 13" d="M12,0,0,11.943"
                                                    transform="translate(0)" fill="none" stroke-linejoin="round"
                                                    stroke-width="2"></path>
                                                <path id="Path_14" data-name="Path 14" d="M8.946,8.9H0V0"
                                                    transform="translate(0 3.04)" fill="none" stroke-linejoin="round"
                                                    stroke-width="2"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog">
                        <div class="blog__img-box">
                            <img src="{{ asset('assets/img/blogs/blog-one.png') }}" class="blog__img">
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
                                    <a href="/blog/lsdjflsd" class="btn-learnmore">
                                        <span class="btn-learnmore__content">Learn More</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                            viewBox="0 0 13.705 13.652" class="btn-learnmore__img">
                                            <g id="Icon_feather-arrow-down-left" data-name="Icon feather-arrow-down-left"
                                                transform="translate(12.705 12.943) rotate(-180)">
                                                <path id="Path_13" data-name="Path 13" d="M12,0,0,11.943"
                                                    transform="translate(0)" fill="none" stroke-linejoin="round"
                                                    stroke-width="2"></path>
                                                <path id="Path_14" data-name="Path 14" d="M8.946,8.9H0V0"
                                                    transform="translate(0 3.04)" fill="none" stroke-linejoin="round"
                                                    stroke-width="2"></path>
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
