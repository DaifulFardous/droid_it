@extends('landing_pages.layouts.app')

@section('content')
    <header class="header-secondary">
        @include('landing_pages.components.navigation')

        <div class="header-secondary__content">
            <div class="header-secondary__content-box">
                <div class="header-secondary__heading-box">
                    <h1 class="heading-primary">Claw Digital Agency</h1>
                </div>

                <div class="header-secondary__text-box">
                    <h4 class="header-secondary__sub-text">Website design</h4>
                    <p class="paragraph-primary">We create impactful digital
                        experiences that attract
                        and engage. Check out our work
                        below or learn more about
                        what we do.</p>
                </div>

                <div class="header-secondary__list-box">
                    <h4 class="header-secondary__sub-text">Technology</h4>

                    <div class="header-secondary__list-content">
                        <ul class="header-secondary__list">
                            <li class="header-secondary__item">
                                <p class="paragraph-primary">HTML5</p>
                            </li>
                            <li class="header-secondary__item">
                                <p class="paragraph-primary">CSS</p>
                            </li>
                            <li class="header-secondary__item">
                                <p class="paragraph-primary">JavaScript</p>
                            </li>
                            <li class="header-secondary__item">
                                <p class="paragraph-primary">Craft CMS</p>
                            </li>
                        </ul>

                        <ul class="header-secondary__list">
                            <li class="header-secondary__item">
                                <p class="paragraph-primary">XD</p>
                            </li>
                            <li class="header-secondary__item">
                                <p class="paragraph-primary">Miro</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="header-secondary__img-box">
                <img src="{{ asset('assets/img/work/work-one.png') }}" class="header-secondary__img">
            </div>
        </div>
    </header>

    <main>
        <section class="section-object">
            <div class="container">
                <div class="text-box">
                    <div class="u-margin-bottom-medium">
                        <h2 class="heading-secondary">Our Portfolio</h2>
                    </div>

                    <p class="paragraph-primary u-margin-bottom-small">Creating a mobile-first website that appeals to
                        the next generation of
                        consumers.</p>
                    <p class="paragraph-primary u-margin-bottom-small">Lorem ipsum dolor sit amet, consetetur sadipscing
                        elitr, sed diam
                        nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                        sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                        voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                        sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

                    <p class="paragraph-primary">Creating a mobile-first website that appeals to the next generation of
                        consumers.</p>
                </div>
            </div>
        </section>



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

        <section class="section-motion">
            <div class="container">
                <div class="u-margin-bottom-medium">
                    <h2 class="heading-secondary">More Screens & Motions</h2>
                </div>

                <div class="motion-img-box">
                    <img src="{{ asset('assets/img/case-study/screens-and-motion.png') }}" class="motion-img" />
                    <img src="{{ asset('assets/img/case-study/screens-and-motion.png') }}" class="motion-img" />
                </div>
            </div>
        </section>

        <section class="section-next-study">
            <div class="u-margin-bottom-medium">
                <h2 class="heading-secondary">More Screens & Motions</h2>
            </div>

            <div class="work-one">
                <div class="work-one__content-box">
                    <div class="work-one__heading-box">
                        <h1 class="heading-primary">Claw Digital Agency</h1>
                    </div>

                    <div class="work-one__text-box">
                        <p class="work-one__sub-text">Website design</p>
                        <p class="paragraph-primary">We create impactful digital
                            experiences that attract
                            and engage. Check out our work
                            below or learn more about
                            what we do.</p>
                    </div>

                    <div class="work-one__btn-box">
                        <a href="/" class="btn-secondary">View Now</a>
                    </div>
                </div>

                <div class="work-one__img-box">
                    <img src="{{ asset('assets/img/work/work-one.png') }}" class="work-one__img">
                </div>
            </div>
        </section>

        <section class="section-skills">
            <div class="rotating-image-box">
            </div>
        </section>
    </main>
@endsection
