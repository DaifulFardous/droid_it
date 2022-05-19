@extends('landing_pages.layouts.app')

@section('content')
    <header class="header">
        @include('landing_pages.components.navigation')
    </header>

    <main>
        <section class="section-contact">
            <div class="contact">
                <div class="contact__form">
                    <div class="contact__form-box">
                        <form action="{{ route('send.email') }}" method="post">
                            @csrf
                            <div class="contact__heading-box">
                                <h1 class="heading-primary">Yes!! we are really excited
                                    to hear about your project</h1>
                            </div>

                            <div class="contact__info-area">
                                <div class="contact__input-box">
                                    <label class="contact__input-label">First Name</label>
                                    <input class="contact__input" name="first_name" placeholder="First Name" type="text"/>
                                </div>
                                <div class="contact__input-box">
                                    <label class="contact__input-label">Last Name</label>
                                    <input class="contact__input" name="last_name" placeholder="Last Name" type="text" />
                                </div>
                                <div class="contact__input-box">
                                    <label class="contact__input-label">Email</label>
                                    <input class="contact__input" name="email" placeholder="Email" type="email"/>
                                </div>
                                <div class="contact__input-box">
                                    <label class="contact__input-label">Phone</label>
                                    <input class="contact__input" name="phone" placeholder="+8801*********" type="tel" />
                                </div>
                            </div>

                            <div class="contact__input-box">
                                <label class="contact__input-label">Service you are looking for</label>

                                <div class="contact__service-box">
                                    <div class="contact__service-item">
                                        <a href="#" class="contact__service">Design & Development</a>
                                    </div>
                                    <div class="contact__service-item">
                                        <a href="#" class="contact__service">Design</a>
                                    </div>
                                    <div class="contact__service-item">
                                        <a href="#" class="contact__service">Development</a>
                                    </div>
                                    <div class="contact__service-item">
                                        <a href="#" class="contact__service">Social Media Content</a>
                                    </div>
                                </div>

                            </div>

                            <div class="contact__textarea-box">
                                <div class="contact__input-box">
                                    <label class="contact__input-label">Tell us about your idea</label>

                                    <textarea class="contact__textarea" rows="23" name="message"></textarea>
                                </div>
                            </div>

                            <div class="contact__btn-box">
                                <button type="submit" class="btn-secondary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="contact__img-box">
                    <img src="{{ asset('assets/img/contact/contact.png') }}" class="contact__img" />
                </div>
            </div>
        </section>
    </main>
@endsection
