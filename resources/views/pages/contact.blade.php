@extends('layouts.maximal')

@push('footer')
    <!-- ===============================================-->
    <!--    THIRD Pary                                  -->
    <!-- ===============================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
@endpush('footer')

@section('content')
    @include('sections/top/header')


    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/bg_2.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="#">
                                Home <i class="fa fa-chevron-right"></i>
                            </a>
                        </span>

                        @php $route = request()->path() @endphp

                        @foreach(explode("/", $route) as $part)
                            <span class="mr-2">
                                <a href="#">
                                    {{ Str::ucfirst($part) }} <i class="fa fa-chevron-right"></i>
                                </a>
                            </span>
                        @endforeach
                    </p>

                    <h1 class="mb-0 bread">
                        {{ Str::ucfirst(Str::after(request()->route()->getName(), '.')) }} Us
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>

                                    @if(old('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ Arr::get(old('status'), 'message')}}
                                        </div>
                                    
                                        <br />
                                    @endif

                                    <br />

                                    <form method="post" action="{{ route('page.contact.store') }}" id="contactForm" name="contactForm" class="contactForm">
                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">First Name</label>
                                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="{{ old('first_name') }}"/>
                                                </div>

                                                @if($errors->has('first_name'))
                                                    <p class="lead" style="color: red;">
                                                        <small> {{ $errors->first('first_name') }} </small>
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Last Name</label>
                                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="{{ old('last_name') }}"/>
                                                </div>

                                                @if($errors->has('last_name'))
                                                    <p class="lead" style="color: red;">
                                                        <small> {{ $errors->first('last_name') }} </small>
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}"/>
                                                </div>

                                                @if($errors->has('email'))
                                                    <p class="lead" style="color: red;">
                                                        <small> {{ $errors->first('email') }} </small>
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}"/>
                                                </div>

                                                @if($errors->has('subject'))
                                                    <p class="lead" style="color: red;">
                                                        <small> {{ $errors->first('subject') }} </small>
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message">{{ old('message') }}</textarea>
                                                </div>

                                                @if($errors->has('message'))
                                                    <p class="lead" style="color: red;">
                                                        <small> {{ $errors->first('message') }} </small>
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" id="submit" value="Send Message" class="btn btn-primary" />
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                    <h3>Let's get in touch</h3>
                                    <p class="mb-4">
                                        We're open for any suggestion or just to have a chat
                                    </p>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Address:</span> Govind Nagar, Sahastradhara Road, Dehradun, Uttarakhand, 248001</p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span>Phone:</span>
                                                <a href="tel://1234567920">+91 96257 35796</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span>Email:</span>
                                                <a href="mailto:iismdehradun@gmail.com">iismdehradun@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span>Website</span>
                                                <a href="#">Iismstockmarketlearning.in</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="google-maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.9116643384236!2d78.0722640881367!3d30.353460309714386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3908d7d29543da21%3A0x62316d01e5475a0d!2sGovind%20Nagar%20Sahastradhara%20Road%20%2C%20Dehradun!5e0!3m2!1sen!2sin!4v1713421308687!5m2!1sen!2sin"
            width="100%"
            height="550"
            style="border: 0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
    </div>


@endsection
