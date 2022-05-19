@extends('landing_pages.layouts.app')

@section('content')
    <header class="header">
        @include('landing_pages.components.navigation')

        <div class="header__content">
            <div class="header__text-box">
                <h1 class="heading-primary">Hello, let us help you to grow</h1>

                <p class="paragraph-primary">We create impactful digital experiences that attract and engage.
                    Check out our work below or learn more about what we do.</p>

                <a href="#section-tours" class="btn-primary u-margin-top-medium">
                    <span class="btn-primary__text">Get free colsultation</span>

                    <span class="btn-primary__img-box">
                        <img class="btn-primary__img" src="{{ asset('assets/./img/header/feather-arrow-down-left.svg') }}"
                            alt="button arrow">
                    </span>
                </a>

            </div>

            <div class="header__img-box">
                <img class="header__img" src="{{ asset('assets/./img/header/landing-header-img.png') }}"
                    alt="landing header image" />

                <div class="header__creative-logo">
                    <div class="header__creative-logo-inner">
                        <div class="header__text-circle-box">
                            <img src="{{ asset('assets/./img/header/text-circle.svg') }}" class="header__text-circle-img"
                                alt="circle text" />
                        </div>
                        <div class="header__star-box">
                            <img src="{{ asset('assets/./img/header/start.svg') }}" class="header__star-img" alt="star" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="header__social-list">
            <li>
                <a href="#" class="header__social-link">
                    <img src="{{ asset('assets/./img/header/instagram.svg') }}" class="header__social-img">
                </a>
            </li>
            <li>
                <a href="#" class="header__social-link">
                    <img src="{{ asset('assets/./img/header/dribbble.svg') }}" class="header__social-img">
                </a>
            </li>
            <li>
                <a href="#" class="header__social-link">
                    <img src="{{ asset('assets/./img/header/behance.svg') }}" class="header__social-img">
                </a>
            </li>
            <li>
                <a href="#" class="header__social-link">
                    <img src="{{ asset('assets/./img/header/whatsapp.svg') }}" class="header__social-img">
                </a>
            </li>
        </ul>
    </header>

    <main>
        <section class="section-services">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__heading section-header__heading--1">
                        <h2 class="heading-secondary">Our Services</h2>
                        <img src="{{ asset('assets/./img/service/stars/red-star.svg') }}"
                            class="section-header__img-red" />
                        <img src="{{ asset('assets/./img/service/stars/white-star.svg') }}"
                            class="section-header__img-white" />
                    </div>

                    <p class="paragraph-primary">We create impactful digital experiences that attract and engage.
                        Check out our work below or learn more about what we do.</p>
                </div>

                <div class="service-design">
                    <div class="u-center-text service-design__heading">
                        <h3 class="heading-tertiary">Design</h3>
                    </div>

                    <div class="service-design__cards">
                        <div class="service-card">
                            <div class="service-card__img-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                                    class="service-card__img">
                                    <g id="_001-vector" data-name="001-vector" transform="translate(-8 -8)">
                                        <path id="Path_401" data-name="Path 401"
                                            d="M198.379,207.164l-10.161-14.677a1.129,1.129,0,0,0-1.857,0L176.2,207.164a1.128,1.128,0,0,0-.143,1l2.892,8.675h-.692a1.129,1.129,0,0,0-1.129,1.129v3.387a1.129,1.129,0,0,0,1.129,1.129h1.129V234.9a1.129,1.129,0,0,0,1.129,1.129h13.548a1.129,1.129,0,0,0,1.129-1.129V222.484h1.129a1.129,1.129,0,0,0,1.129-1.129v-3.387a1.129,1.129,0,0,0-1.129-1.129h-.692l2.892-8.675A1.128,1.128,0,0,0,198.379,207.164Zm-11.09-1.616a1.129,1.129,0,1,1-1.129,1.129A1.129,1.129,0,0,1,187.289,205.548Zm5.645,28.226h-11.29v-11.29h11.29Zm2.258-13.548H179.386V219.1h15.806Zm-1.943-3.387h-11.92l-2.952-8.853,7.783-11.242v6.547a1.194,1.194,0,0,0,.017.189,3.387,3.387,0,1,0,2.224,0,1.192,1.192,0,0,0,.017-.189v-6.547l7.783,11.242Z"
                                            transform="translate(-144.289 -158.032)" />
                                        <path id="Path_402" data-name="Path 402"
                                            d="M76.871,20.419H72.355a1.129,1.129,0,0,0-1.129,1.129v1.139a1.164,1.164,0,0,0-.141-.01h-24.7V21.548a1.129,1.129,0,0,0-1.129-1.129H44.129V14.774h1.129a1.129,1.129,0,0,0,1.129-1.129V9.129A1.129,1.129,0,0,0,45.258,8H40.742a1.129,1.129,0,0,0-1.129,1.129v4.516a1.129,1.129,0,0,0,1.129,1.129h1.129v5.645H40.742a1.129,1.129,0,0,0-1.129,1.129v1.129H14.774V21.548a1.129,1.129,0,0,0-1.129-1.129H9.129A1.129,1.129,0,0,0,8,21.548v4.516a1.129,1.129,0,0,0,1.129,1.129h4.516a1.129,1.129,0,0,0,1.129-1.129V24.935H33.44a17.661,17.661,0,0,0-3.95,3.578,19.631,19.631,0,0,0-4.554,12.229H23.806a1.129,1.129,0,0,0-1.129,1.129v4.516a1.129,1.129,0,0,0,1.129,1.129h4.516a1.129,1.129,0,0,0,1.129-1.129V41.871a1.129,1.129,0,0,0-1.129-1.129H27.194c0-8.372,6.441-14.975,12.419-15.733v1.056a1.129,1.129,0,0,0,1.129,1.129h4.516a1.129,1.129,0,0,0,1.129-1.129V25c3.057.363,5.991,2.195,8.359,5.25a19.818,19.818,0,0,1,4.021,10.487h-1.09a1.129,1.129,0,0,0-1.129,1.129v4.516a1.129,1.129,0,0,0,1.129,1.129h4.516a1.129,1.129,0,0,0,1.129-1.129V41.871a1.129,1.129,0,0,0-1.129-1.129H61.029a21.8,21.8,0,0,0-4.5-11.872,17.838,17.838,0,0,0-4.149-3.935h18.7a1.166,1.166,0,0,0,.141-.01v1.139a1.129,1.129,0,0,0,1.129,1.129h4.516A1.129,1.129,0,0,0,78,26.065V21.548A1.129,1.129,0,0,0,76.871,20.419ZM12.516,24.935H10.258V22.677h2.258ZM27.194,45.258H24.935V43h2.258Zm14.677-35h2.258v2.258H41.871Zm2.258,14.677H41.871V22.677h2.258ZM58.806,43h2.258v2.258H58.806ZM75.742,24.935H73.484V22.677h2.258Z"
                                            transform="translate(0 0)" />
                                    </g>
                                </svg>
                            </div>

                            <h4 class="heading-quaternary">Ui/Ux for Website, Mobile & Web-Application</h4>

                            <p class="paragraph-primary">We create impactful digital experiences
                                that attract and engage. Check out our
                                work below.</p>

                            <div class="service-card__btn-box">
                                <a href="/" class="btn-learnmore">
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

                        <div class="service-card">
                            <div class="service-card__img-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                                    class="service-card__img">
                                    <g id="_001-ads" data-name="001-ads" transform="translate(-4.75 -13.6)">
                                        <path id="Path_521" data-name="Path 521"
                                            d="M73.716,13.6H5.784A1.136,1.136,0,0,0,4.75,14.815V82.39A1.135,1.135,0,0,0,5.784,83.6H73.716a.962.962,0,0,0,.731-.356,1.331,1.331,0,0,0,.3-.86V14.812A1.134,1.134,0,0,0,73.716,13.6Zm-66.9,2.431H72.682v7.387H6.818Zm0,65.144V25.848H72.682V81.169Z" />
                                        <path id="Path_522" data-name="Path 522"
                                            d="M81.7,19.393a1.769,1.769,0,1,0,1.769,1.769A1.769,1.769,0,0,0,81.7,19.393Z"
                                            transform="translate(-30.749 -2.403)" />
                                        <path id="Path_523" data-name="Path 523"
                                            d="M93.537,19.393a1.769,1.769,0,1,0,1.769,1.769,1.769,1.769,0,0,0-1.769-1.769Z"
                                            transform="translate(-35.588 -2.403)" />
                                        <path id="Path_524" data-name="Path 524"
                                            d="M105.37,19.393a1.769,1.769,0,1,0,1.769,1.769,1.769,1.769,0,0,0-1.769-1.769Z"
                                            transform="translate(-40.348 -2.403)" />
                                        <path id="Path_525" data-name="Path 525"
                                            d="M31.794,58.83,25.343,73.166h2.744L29.5,69.848h7.17L38.1,73.166h2.785L34.416,58.83ZM30.4,67.759l2.683-6.267,2.7,6.267Z"
                                            transform="translate(-8.395 -12.233)" />
                                        <path id="Path_526" data-name="Path 526"
                                            d="M65.366,59.72a8.992,8.992,0,0,0-4.076-.891H55.022V73.165h6.267a9,9,0,0,0,4.077-.891,6.6,6.6,0,0,0,2.764-2.521,7.676,7.676,0,0,0,0-7.517A6.59,6.59,0,0,0,65.366,59.72Zm.42,8.868a4.319,4.319,0,0,1-1.843,1.72,6.08,6.08,0,0,1-2.775.6H57.686v-9.83h3.482a6.08,6.08,0,0,1,2.775.6,4.322,4.322,0,0,1,1.843,1.72,5.524,5.524,0,0,1,0,5.182Z"
                                            transform="translate(-20.504 -12.232)" />
                                        <path id="Path_527" data-name="Path 527"
                                            d="M90.839,65.533a19.6,19.6,0,0,0-2.621-.768q-1.167-.287-1.844-.512a3.178,3.178,0,0,1-1.116-.614,1.277,1.277,0,0,1-.441-1,1.643,1.643,0,0,1,.768-1.413,4.149,4.149,0,0,1,2.345-.532,7.376,7.376,0,0,1,1.987.287,8.268,8.268,0,0,1,1.965.84l.84-2.069a7.152,7.152,0,0,0-2.191-.942,10.3,10.3,0,0,0-2.58-.328,7.885,7.885,0,0,0-3.185.573A4.36,4.36,0,0,0,82.819,60.6a3.824,3.824,0,0,0-.644,2.16A3.284,3.284,0,0,0,82.9,65a4.36,4.36,0,0,0,1.741,1.218A21.451,21.451,0,0,0,87.295,67q1.17.287,1.843.512a3.093,3.093,0,0,1,1.115.626,1.311,1.311,0,0,1,.44,1.014,1.551,1.551,0,0,1-.788,1.352,4.442,4.442,0,0,1-2.386.512,7.852,7.852,0,0,1-2.57-.441,7.243,7.243,0,0,1-2.161-1.136L81.866,71.5a6.686,6.686,0,0,0,2.448,1.249,10.952,10.952,0,0,0,3.2.471,7.95,7.95,0,0,0,3.195-.573,4.388,4.388,0,0,0,1.956-1.536,3.775,3.775,0,0,0,.644-2.15,3.213,3.213,0,0,0-.727-2.212A4.5,4.5,0,0,0,90.839,65.533Z"
                                            transform="translate(-31.477 -12.076)" />
                                    </g>
                                </svg>
                            </div>

                            <h4 class="heading-quaternary">Bannar Design (Website, Social, Media) </h4>

                            <p class="paragraph-primary">We create impactful digital experiences
                                that attract and engage. Check out our
                                work below.</p>

                            <div class="service-card__btn-box">
                                <a href="/" class="btn-learnmore">
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

                        <div class="service-card">
                            <div class="service-card__img-box">
                                <svg id="_002-social-media" data-name="002-social-media" xmlns="http://www.w3.org/2000/svg"
                                    width="70" height="70" viewBox="0 0 70 70" class="service-card__img">
                                    <g id="Group_250" data-name="Group 250" transform="translate(23 6)">
                                        <g id="Group_249" data-name="Group 249" transform="translate(0 0)">
                                            <rect id="Rectangle_62" data-name="Rectangle 62" width="24" height="2" />
                                        </g>
                                    </g>
                                    <g id="Group_252" data-name="Group 252" transform="translate(15.167 23.333)">
                                        <g id="Group_251" data-name="Group 251">
                                            <path id="Path_528" data-name="Path 528"
                                                d="M146.583,180.417a4.088,4.088,0,0,0-4.083-4.083h-2.333V160h-2.333v16.333h-2.917a4.077,4.077,0,0,0-2.849,7,4.035,4.035,0,0,0-.614,5.056,4.08,4.08,0,0,0-2.371,3.694,4.036,4.036,0,0,0,.41,1.75h-9.16a10.5,10.5,0,0,0-4.514-8.622,7.012,7.012,0,0,0,4.514-6.544,1.166,1.166,0,0,0-1.167-1.167h-9.333V165.833H107.5V177.5A3.5,3.5,0,0,0,104,181v25.667h2.333V181a1.168,1.168,0,0,1,1.167-1.167h10.352a4.674,4.674,0,0,1-4.519,3.5h-3.5a1.167,1.167,0,1,0,0,2.333A8.176,8.176,0,0,1,118,193.833V195a1.166,1.166,0,0,0,1.167,1.167h6.826a4.036,4.036,0,0,0-.41,1.75A4.088,4.088,0,0,0,129.667,202v4.667H132V202h5.25a4.088,4.088,0,0,0,4.083-4.083,4.034,4.034,0,0,0-.419-1.767,4.052,4.052,0,0,0,3.3-6.206,4.063,4.063,0,0,0,1.136-6.611A4.067,4.067,0,0,0,146.583,180.417Zm-9.333,19.25h-7.583a1.75,1.75,0,1,1,0-3.5h7.583a1.75,1.75,0,0,1,0,3.5Zm3.5-5.833h-7.583a1.75,1.75,0,0,1,0-3.5h7.583a1.75,1.75,0,0,1,0,3.5ZM142.5,188h-7.583a1.75,1.75,0,0,1,0-3.5H142.5a1.75,1.75,0,0,1,0,3.5Zm0-5.833h-7.583a1.75,1.75,0,0,1,0-3.5H142.5a1.75,1.75,0,0,1,0,3.5Z"
                                                transform="translate(-104 -160)" />
                                        </g>
                                    </g>
                                    <g id="Group_254" data-name="Group 254" transform="translate(4.667 10.5)">
                                        <g id="Group_253" data-name="Group 253">
                                            <path id="Path_529" data-name="Path 529"
                                                d="M44.83,76.35a1.166,1.166,0,0,0-.458-.847l-1.215-.921a3.184,3.184,0,0,0-6.311.583,6.772,6.772,0,0,1-2.62-1.058l-.407-.275A1.166,1.166,0,0,0,32,74.8v.957a6.738,6.738,0,0,0,1.21,3.873l-.873.883a1.166,1.166,0,0,0,.829,1.987H38.82a4.417,4.417,0,0,0,4.369-3.924L44.5,77.253A1.168,1.168,0,0,0,44.83,76.35Zm-3.608.9a1.165,1.165,0,0,0-.337.82,2.085,2.085,0,0,1-2.064,2.1H35.852a1.168,1.168,0,0,0-.24-1.287,4.462,4.462,0,0,1-1.131-1.993,9.074,9.074,0,0,0,3.533.713,1.166,1.166,0,0,0,1.167-1.167V75.208a.853.853,0,1,1,1.7,0,1.167,1.167,0,0,0,.461.93l.556.421Z"
                                                transform="translate(-32 -72)" />
                                        </g>
                                    </g>
                                    <g id="Group_256" data-name="Group 256" transform="translate(31.5 17.5)">
                                        <g id="Group_255" data-name="Group 255">
                                            <path id="Path_530" data-name="Path 530"
                                                d="M223,122.333V120h-3.5a1.166,1.166,0,0,0-1.167,1.167v3.5H216V127h2.333v4.667h2.333V127H223v-2.333h-2.333v-2.333Z"
                                                transform="translate(-216 -120)" />
                                        </g>
                                    </g>
                                    <g id="Group_258" data-name="Group 258" transform="translate(24.5 12.833)">
                                        <g id="Group_257" data-name="Group 257">
                                            <path id="Path_531" data-name="Path 531"
                                                d="M185.5,88h-14a3.5,3.5,0,0,0-3.5,3.5v14a3.5,3.5,0,0,0,3.5,3.5h14a3.5,3.5,0,0,0,3.5-3.5v-14A3.5,3.5,0,0,0,185.5,88Zm1.167,17.5a1.168,1.168,0,0,1-1.167,1.167h-14a1.168,1.168,0,0,1-1.167-1.167v-14a1.168,1.168,0,0,1,1.167-1.167h14a1.168,1.168,0,0,1,1.167,1.167Z"
                                                transform="translate(-168 -88)" />
                                        </g>
                                    </g>
                                    <g id="Group_260" data-name="Group 260" transform="translate(0 5.833)">
                                        <g id="Group_259" data-name="Group 259">
                                            <path id="Path_532" data-name="Path 532"
                                                d="M17.5,40H3.5A3.5,3.5,0,0,0,0,43.5v14A3.5,3.5,0,0,0,3.5,61h14A3.5,3.5,0,0,0,21,57.5v-14A3.5,3.5,0,0,0,17.5,40Zm1.167,17.5A1.168,1.168,0,0,1,17.5,58.667H3.5A1.168,1.168,0,0,1,2.333,57.5v-14A1.168,1.168,0,0,1,3.5,42.333h14A1.168,1.168,0,0,1,18.667,43.5Z"
                                                transform="translate(0 -40)" />
                                        </g>
                                    </g>
                                    <g id="Group_262" data-name="Group 262" transform="translate(49)">
                                        <g id="Group_261" data-name="Group 261">
                                            <path id="Path_533" data-name="Path 533"
                                                d="M353.5,0h-14A3.5,3.5,0,0,0,336,3.5v14a3.5,3.5,0,0,0,3.5,3.5h14a3.5,3.5,0,0,0,3.5-3.5V3.5A3.5,3.5,0,0,0,353.5,0Zm1.167,17.5a1.168,1.168,0,0,1-1.167,1.167h-14a1.168,1.168,0,0,1-1.167-1.167V11.667h2.451a5.833,5.833,0,0,0,11.431,0h2.451ZM343,10.5a3.5,3.5,0,1,1,3.5,3.5A3.5,3.5,0,0,1,343,10.5Zm11.667-1.167h-2.451a5.833,5.833,0,0,0-11.431,0h-2.451V3.5A1.168,1.168,0,0,1,339.5,2.333h14A1.168,1.168,0,0,1,354.667,3.5Z"
                                                transform="translate(-336)" />
                                        </g>
                                    </g>
                                    <g id="Group_264" data-name="Group 264" transform="translate(34 48)">
                                        <g id="Group_263" data-name="Group 263" transform="translate(0 0)">
                                            <rect id="Rectangle_63" data-name="Rectangle 63" width="2" height="2" />
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <h4 class="heading-quaternary">Social Media Ad Template Design</h4>

                            <p class="paragraph-primary">We create impactful digital experiences
                                that attract and engage. Check out our
                                work below.</p>

                            <div class="service-card__btn-box">
                                <a href="/" class="btn-learnmore">
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

                <div class="service-development">
                    <div class="u-center-text service-design__heading">
                        <h3 class="heading-tertiary">Development</h3>
                    </div>

                    <div class="service-design__cards">
                        <div class="service-card">
                            <div class="service-card__img-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                                    class="service-card__img">
                                    <g id="_001-vector" data-name="001-vector" transform="translate(-8 -8)">
                                        <path id="Path_401" data-name="Path 401"
                                            d="M198.379,207.164l-10.161-14.677a1.129,1.129,0,0,0-1.857,0L176.2,207.164a1.128,1.128,0,0,0-.143,1l2.892,8.675h-.692a1.129,1.129,0,0,0-1.129,1.129v3.387a1.129,1.129,0,0,0,1.129,1.129h1.129V234.9a1.129,1.129,0,0,0,1.129,1.129h13.548a1.129,1.129,0,0,0,1.129-1.129V222.484h1.129a1.129,1.129,0,0,0,1.129-1.129v-3.387a1.129,1.129,0,0,0-1.129-1.129h-.692l2.892-8.675A1.128,1.128,0,0,0,198.379,207.164Zm-11.09-1.616a1.129,1.129,0,1,1-1.129,1.129A1.129,1.129,0,0,1,187.289,205.548Zm5.645,28.226h-11.29v-11.29h11.29Zm2.258-13.548H179.386V219.1h15.806Zm-1.943-3.387h-11.92l-2.952-8.853,7.783-11.242v6.547a1.194,1.194,0,0,0,.017.189,3.387,3.387,0,1,0,2.224,0,1.192,1.192,0,0,0,.017-.189v-6.547l7.783,11.242Z"
                                            transform="translate(-144.289 -158.032)" />
                                        <path id="Path_402" data-name="Path 402"
                                            d="M76.871,20.419H72.355a1.129,1.129,0,0,0-1.129,1.129v1.139a1.164,1.164,0,0,0-.141-.01h-24.7V21.548a1.129,1.129,0,0,0-1.129-1.129H44.129V14.774h1.129a1.129,1.129,0,0,0,1.129-1.129V9.129A1.129,1.129,0,0,0,45.258,8H40.742a1.129,1.129,0,0,0-1.129,1.129v4.516a1.129,1.129,0,0,0,1.129,1.129h1.129v5.645H40.742a1.129,1.129,0,0,0-1.129,1.129v1.129H14.774V21.548a1.129,1.129,0,0,0-1.129-1.129H9.129A1.129,1.129,0,0,0,8,21.548v4.516a1.129,1.129,0,0,0,1.129,1.129h4.516a1.129,1.129,0,0,0,1.129-1.129V24.935H33.44a17.661,17.661,0,0,0-3.95,3.578,19.631,19.631,0,0,0-4.554,12.229H23.806a1.129,1.129,0,0,0-1.129,1.129v4.516a1.129,1.129,0,0,0,1.129,1.129h4.516a1.129,1.129,0,0,0,1.129-1.129V41.871a1.129,1.129,0,0,0-1.129-1.129H27.194c0-8.372,6.441-14.975,12.419-15.733v1.056a1.129,1.129,0,0,0,1.129,1.129h4.516a1.129,1.129,0,0,0,1.129-1.129V25c3.057.363,5.991,2.195,8.359,5.25a19.818,19.818,0,0,1,4.021,10.487h-1.09a1.129,1.129,0,0,0-1.129,1.129v4.516a1.129,1.129,0,0,0,1.129,1.129h4.516a1.129,1.129,0,0,0,1.129-1.129V41.871a1.129,1.129,0,0,0-1.129-1.129H61.029a21.8,21.8,0,0,0-4.5-11.872,17.838,17.838,0,0,0-4.149-3.935h18.7a1.166,1.166,0,0,0,.141-.01v1.139a1.129,1.129,0,0,0,1.129,1.129h4.516A1.129,1.129,0,0,0,78,26.065V21.548A1.129,1.129,0,0,0,76.871,20.419ZM12.516,24.935H10.258V22.677h2.258ZM27.194,45.258H24.935V43h2.258Zm14.677-35h2.258v2.258H41.871Zm2.258,14.677H41.871V22.677h2.258ZM58.806,43h2.258v2.258H58.806ZM75.742,24.935H73.484V22.677h2.258Z"
                                            transform="translate(0 0)" />
                                    </g>
                                </svg>
                            </div>

                            <h4 class="heading-quaternary">Ui/Ux for Website, Mobile & Web-Application</h4>

                            <p class="paragraph-primary">We create impactful digital experiences
                                that attract and engage. Check out our
                                work below.</p>

                            <div class="service-card__btn-box">
                                <a href="/" class="btn-learnmore">
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

                        <div class="service-card">
                            <div class="service-card__img-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                                    class="service-card__img">
                                    <g id="_001-ads" data-name="001-ads" transform="translate(-4.75 -13.6)">
                                        <path id="Path_521" data-name="Path 521"
                                            d="M73.716,13.6H5.784A1.136,1.136,0,0,0,4.75,14.815V82.39A1.135,1.135,0,0,0,5.784,83.6H73.716a.962.962,0,0,0,.731-.356,1.331,1.331,0,0,0,.3-.86V14.812A1.134,1.134,0,0,0,73.716,13.6Zm-66.9,2.431H72.682v7.387H6.818Zm0,65.144V25.848H72.682V81.169Z" />
                                        <path id="Path_522" data-name="Path 522"
                                            d="M81.7,19.393a1.769,1.769,0,1,0,1.769,1.769A1.769,1.769,0,0,0,81.7,19.393Z"
                                            transform="translate(-30.749 -2.403)" />
                                        <path id="Path_523" data-name="Path 523"
                                            d="M93.537,19.393a1.769,1.769,0,1,0,1.769,1.769,1.769,1.769,0,0,0-1.769-1.769Z"
                                            transform="translate(-35.588 -2.403)" />
                                        <path id="Path_524" data-name="Path 524"
                                            d="M105.37,19.393a1.769,1.769,0,1,0,1.769,1.769,1.769,1.769,0,0,0-1.769-1.769Z"
                                            transform="translate(-40.348 -2.403)" />
                                        <path id="Path_525" data-name="Path 525"
                                            d="M31.794,58.83,25.343,73.166h2.744L29.5,69.848h7.17L38.1,73.166h2.785L34.416,58.83ZM30.4,67.759l2.683-6.267,2.7,6.267Z"
                                            transform="translate(-8.395 -12.233)" />
                                        <path id="Path_526" data-name="Path 526"
                                            d="M65.366,59.72a8.992,8.992,0,0,0-4.076-.891H55.022V73.165h6.267a9,9,0,0,0,4.077-.891,6.6,6.6,0,0,0,2.764-2.521,7.676,7.676,0,0,0,0-7.517A6.59,6.59,0,0,0,65.366,59.72Zm.42,8.868a4.319,4.319,0,0,1-1.843,1.72,6.08,6.08,0,0,1-2.775.6H57.686v-9.83h3.482a6.08,6.08,0,0,1,2.775.6,4.322,4.322,0,0,1,1.843,1.72,5.524,5.524,0,0,1,0,5.182Z"
                                            transform="translate(-20.504 -12.232)" />
                                        <path id="Path_527" data-name="Path 527"
                                            d="M90.839,65.533a19.6,19.6,0,0,0-2.621-.768q-1.167-.287-1.844-.512a3.178,3.178,0,0,1-1.116-.614,1.277,1.277,0,0,1-.441-1,1.643,1.643,0,0,1,.768-1.413,4.149,4.149,0,0,1,2.345-.532,7.376,7.376,0,0,1,1.987.287,8.268,8.268,0,0,1,1.965.84l.84-2.069a7.152,7.152,0,0,0-2.191-.942,10.3,10.3,0,0,0-2.58-.328,7.885,7.885,0,0,0-3.185.573A4.36,4.36,0,0,0,82.819,60.6a3.824,3.824,0,0,0-.644,2.16A3.284,3.284,0,0,0,82.9,65a4.36,4.36,0,0,0,1.741,1.218A21.451,21.451,0,0,0,87.295,67q1.17.287,1.843.512a3.093,3.093,0,0,1,1.115.626,1.311,1.311,0,0,1,.44,1.014,1.551,1.551,0,0,1-.788,1.352,4.442,4.442,0,0,1-2.386.512,7.852,7.852,0,0,1-2.57-.441,7.243,7.243,0,0,1-2.161-1.136L81.866,71.5a6.686,6.686,0,0,0,2.448,1.249,10.952,10.952,0,0,0,3.2.471,7.95,7.95,0,0,0,3.195-.573,4.388,4.388,0,0,0,1.956-1.536,3.775,3.775,0,0,0,.644-2.15,3.213,3.213,0,0,0-.727-2.212A4.5,4.5,0,0,0,90.839,65.533Z"
                                            transform="translate(-31.477 -12.076)" />
                                    </g>
                                </svg>
                            </div>

                            <h4 class="heading-quaternary">Bannar Design (Website, Social, Media) </h4>

                            <p class="paragraph-primary">We create impactful digital experiences
                                that attract and engage. Check out our
                                work below.</p>

                            <div class="service-card__btn-box">
                                <a href="/" class="btn-learnmore">
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

                        <div class="service-card">
                            <div class="service-card__img-box">
                                <svg id="_002-social-media" data-name="002-social-media" xmlns="http://www.w3.org/2000/svg"
                                    width="70" height="70" viewBox="0 0 70 70" class="service-card__img">
                                    <g id="Group_250" data-name="Group 250" transform="translate(23 6)">
                                        <g id="Group_249" data-name="Group 249" transform="translate(0 0)">
                                            <rect id="Rectangle_62" data-name="Rectangle 62" width="24" height="2" />
                                        </g>
                                    </g>
                                    <g id="Group_252" data-name="Group 252" transform="translate(15.167 23.333)">
                                        <g id="Group_251" data-name="Group 251">
                                            <path id="Path_528" data-name="Path 528"
                                                d="M146.583,180.417a4.088,4.088,0,0,0-4.083-4.083h-2.333V160h-2.333v16.333h-2.917a4.077,4.077,0,0,0-2.849,7,4.035,4.035,0,0,0-.614,5.056,4.08,4.08,0,0,0-2.371,3.694,4.036,4.036,0,0,0,.41,1.75h-9.16a10.5,10.5,0,0,0-4.514-8.622,7.012,7.012,0,0,0,4.514-6.544,1.166,1.166,0,0,0-1.167-1.167h-9.333V165.833H107.5V177.5A3.5,3.5,0,0,0,104,181v25.667h2.333V181a1.168,1.168,0,0,1,1.167-1.167h10.352a4.674,4.674,0,0,1-4.519,3.5h-3.5a1.167,1.167,0,1,0,0,2.333A8.176,8.176,0,0,1,118,193.833V195a1.166,1.166,0,0,0,1.167,1.167h6.826a4.036,4.036,0,0,0-.41,1.75A4.088,4.088,0,0,0,129.667,202v4.667H132V202h5.25a4.088,4.088,0,0,0,4.083-4.083,4.034,4.034,0,0,0-.419-1.767,4.052,4.052,0,0,0,3.3-6.206,4.063,4.063,0,0,0,1.136-6.611A4.067,4.067,0,0,0,146.583,180.417Zm-9.333,19.25h-7.583a1.75,1.75,0,1,1,0-3.5h7.583a1.75,1.75,0,0,1,0,3.5Zm3.5-5.833h-7.583a1.75,1.75,0,0,1,0-3.5h7.583a1.75,1.75,0,0,1,0,3.5ZM142.5,188h-7.583a1.75,1.75,0,0,1,0-3.5H142.5a1.75,1.75,0,0,1,0,3.5Zm0-5.833h-7.583a1.75,1.75,0,0,1,0-3.5H142.5a1.75,1.75,0,0,1,0,3.5Z"
                                                transform="translate(-104 -160)" />
                                        </g>
                                    </g>
                                    <g id="Group_254" data-name="Group 254" transform="translate(4.667 10.5)">
                                        <g id="Group_253" data-name="Group 253">
                                            <path id="Path_529" data-name="Path 529"
                                                d="M44.83,76.35a1.166,1.166,0,0,0-.458-.847l-1.215-.921a3.184,3.184,0,0,0-6.311.583,6.772,6.772,0,0,1-2.62-1.058l-.407-.275A1.166,1.166,0,0,0,32,74.8v.957a6.738,6.738,0,0,0,1.21,3.873l-.873.883a1.166,1.166,0,0,0,.829,1.987H38.82a4.417,4.417,0,0,0,4.369-3.924L44.5,77.253A1.168,1.168,0,0,0,44.83,76.35Zm-3.608.9a1.165,1.165,0,0,0-.337.82,2.085,2.085,0,0,1-2.064,2.1H35.852a1.168,1.168,0,0,0-.24-1.287,4.462,4.462,0,0,1-1.131-1.993,9.074,9.074,0,0,0,3.533.713,1.166,1.166,0,0,0,1.167-1.167V75.208a.853.853,0,1,1,1.7,0,1.167,1.167,0,0,0,.461.93l.556.421Z"
                                                transform="translate(-32 -72)" />
                                        </g>
                                    </g>
                                    <g id="Group_256" data-name="Group 256" transform="translate(31.5 17.5)">
                                        <g id="Group_255" data-name="Group 255">
                                            <path id="Path_530" data-name="Path 530"
                                                d="M223,122.333V120h-3.5a1.166,1.166,0,0,0-1.167,1.167v3.5H216V127h2.333v4.667h2.333V127H223v-2.333h-2.333v-2.333Z"
                                                transform="translate(-216 -120)" />
                                        </g>
                                    </g>
                                    <g id="Group_258" data-name="Group 258" transform="translate(24.5 12.833)">
                                        <g id="Group_257" data-name="Group 257">
                                            <path id="Path_531" data-name="Path 531"
                                                d="M185.5,88h-14a3.5,3.5,0,0,0-3.5,3.5v14a3.5,3.5,0,0,0,3.5,3.5h14a3.5,3.5,0,0,0,3.5-3.5v-14A3.5,3.5,0,0,0,185.5,88Zm1.167,17.5a1.168,1.168,0,0,1-1.167,1.167h-14a1.168,1.168,0,0,1-1.167-1.167v-14a1.168,1.168,0,0,1,1.167-1.167h14a1.168,1.168,0,0,1,1.167,1.167Z"
                                                transform="translate(-168 -88)" />
                                        </g>
                                    </g>
                                    <g id="Group_260" data-name="Group 260" transform="translate(0 5.833)">
                                        <g id="Group_259" data-name="Group 259">
                                            <path id="Path_532" data-name="Path 532"
                                                d="M17.5,40H3.5A3.5,3.5,0,0,0,0,43.5v14A3.5,3.5,0,0,0,3.5,61h14A3.5,3.5,0,0,0,21,57.5v-14A3.5,3.5,0,0,0,17.5,40Zm1.167,17.5A1.168,1.168,0,0,1,17.5,58.667H3.5A1.168,1.168,0,0,1,2.333,57.5v-14A1.168,1.168,0,0,1,3.5,42.333h14A1.168,1.168,0,0,1,18.667,43.5Z"
                                                transform="translate(0 -40)" />
                                        </g>
                                    </g>
                                    <g id="Group_262" data-name="Group 262" transform="translate(49)">
                                        <g id="Group_261" data-name="Group 261">
                                            <path id="Path_533" data-name="Path 533"
                                                d="M353.5,0h-14A3.5,3.5,0,0,0,336,3.5v14a3.5,3.5,0,0,0,3.5,3.5h14a3.5,3.5,0,0,0,3.5-3.5V3.5A3.5,3.5,0,0,0,353.5,0Zm1.167,17.5a1.168,1.168,0,0,1-1.167,1.167h-14a1.168,1.168,0,0,1-1.167-1.167V11.667h2.451a5.833,5.833,0,0,0,11.431,0h2.451ZM343,10.5a3.5,3.5,0,1,1,3.5,3.5A3.5,3.5,0,0,1,343,10.5Zm11.667-1.167h-2.451a5.833,5.833,0,0,0-11.431,0h-2.451V3.5A1.168,1.168,0,0,1,339.5,2.333h14A1.168,1.168,0,0,1,354.667,3.5Z"
                                                transform="translate(-336)" />
                                        </g>
                                    </g>
                                    <g id="Group_264" data-name="Group 264" transform="translate(34 48)">
                                        <g id="Group_263" data-name="Group 263" transform="translate(0 0)">
                                            <rect id="Rectangle_63" data-name="Rectangle 63" width="2" height="2" />
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <h4 class="heading-quaternary">Social Media Ad Template Design</h4>

                            <p class="paragraph-primary">We create impactful digital experiences
                                that attract and engage. Check out our
                                work below.</p>

                            <div class="service-card__btn-box">
                                <a href="/" class="btn-learnmore">
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
        </section>

        <section class="section-works">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__heading section-header__heading--2">
                        <h2 class="heading-secondary">Our works for you</h2>
                        <img src="{{ asset('assets/./img/service/stars/red-star.svg') }}"
                            class="section-header__img-red" />
                        <img src="{{ asset('assets/./img/service/stars/white-star.svg') }}"
                            class="section-header__img-white" />
                    </div>

                    <p class="paragraph-primary">We create impactful digital experiences that attract and engage.
                        Check out our work below or learn more about what we do.</p>
                </div>

                <div class="work-list">

                    <div class="work-one">
                        <div class="work-one__content-box">
                            <div class="work-one__heading-box">
                                <h1 class="heading-primary">Claw Digital Agency</h1>
                            </div>

                            <div class="work-one__flex-box">
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
                        </div>

                        <div class="work-one__img-box">
                            <img src="{{ asset('assets/./img/work/work-one.png') }}" class="work-one__img">
                        </div>
                    </div>


                    <div class="work-one">
                        <div class="work-one__content-box">
                            <div class="work-one__heading-box">
                                <h1 class="heading-primary">Liquids Dashboard</h1>
                            </div>

                            <div class="work-one__flex-box">
                                <div class="work-one__text-box">
                                    <p class="work-one__sub-text">Web app</p>
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
                        </div>

                        <div class="work-one__img-box">
                            <img src="{{ asset('assets/./img/work/work-two.png') }}" class="work-one__img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-blogs">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__heading section-header__heading--3">
                        <h2 class="heading-secondary">Blogs only for You</h2>
                        <img src="{{ asset('assets/./img/service/stars/red-star.svg') }}"
                            class="section-header__img-red" />
                        <img src="{{ asset('assets/./img/service/stars/white-star.svg') }}"
                            class="section-header__img-white" />
                    </div>

                    <p class="paragraph-primary">We create impactful digital experiences that attract and engage.
                        Check out our work below or learn more about what we do.</p>
                </div>

                <div class="blog-list">
                    <div class="blog">
                        <div class="blog__img-box">
                            <img src="{{ asset('assets/./img/blogs/blog-two.png') }}" class="blog__img" />
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
                                    <a href="/blog/jlsdjflsj" class="btn-learnmore">
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
                            <img src="{{ asset('assets/./img/blogs/blog-one.png') }}" class="blog__img" />
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
                                    <a href="/blog/jlsdjflsd" class="btn-learnmore">
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

        <section class="section-skills">
            <div class="rotating-image-box">
            </div>
        </section>
    </main>
@endsection
