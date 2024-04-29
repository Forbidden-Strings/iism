@extends('layouts.maximal')

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
                        Our {{ Str::ucfirst(Str::after(request()->route()->getName(), '.')) }}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Our Blog</span>
                    <h2 class="mb-4">Recent Post</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a
                            href="https://www.investopedia.com/technical-analysis-4689657#:~:text=Technical%20analysis%20is%20an%20investing,More%20What%20is%20technical%20analysis%3F"
                            class="block-20"
                            style="background-image: url('{{ asset('assets/images/2.jpg') }}');"
                        ></a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="https://www.investopedia.com/technical-analysis-4689657#:~:text=Technical%20analysis%20is%20an%20investing,More%20What%20is%20technical%20analysis%3F">
                                        <span class="fa fa-calendar mr-2"></span>jan. 17, 2024
                                    </a>
                                    <a href="#"> <span class="fa fa-user mr-2"></span>Admin</a>
                                    <a href="#" class="meta-chat">
                                        <span class="fa fa-comment mr-2"></span>
                                        3
                                    </a>
                                </p>
                            </div>
                            <h3 class="heading">
                                <a href="https://www.investopedia.com/technical-analysis-4689657#:~:text=Technical%20analysis%20is%20an%20investing,More%20What%20is%20technical%20analysis%3F">Technical Analysis</a>
                            </h3>
                            <p>
                                Technical analysis is the study of the price movement and patterns of a security. By scrutinizing a security's past price action, primarily through charts and indicators, traders can forecast future price
                                direction.
                            </p>
                            <p>
                                <a href="https://www.investopedia.com/technical-analysis-4689657#:~:text=Technical%20analysis%20is%20an%20investing,More%20What%20is%20technical%20analysis%3F" class="btn btn-secondary py-2 px-3">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="https://www.amfiindia.com/investor-corner/knowledge-center/what-are-mutual-funds-new.html" class="block-20" style="background-image: url('{{ asset('assets/images/5.jpg') }}');"></a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="#"> <span class="fa fa-calendar mr-2"></span>march, 5 2020</a>
                                    <a href="#"> <span class="fa fa-user mr-2"></span>Admin</a>
                                    <a href="#" class="meta-chat">
                                        <span class="fa fa-comment mr-2"></span>
                                        3
                                    </a>
                                </p>
                            </div>
                            <h3 class="heading">
                                <a href="https://www.amfiindia.com/investor-corner/knowledge-center/what-are-mutual-funds-new.html">WHAT ARE MUTUAL FUNDS?</a>
                            </h3>
                            <p>
                                It is a trust that collects money from a number of investors who share a common investment objective and invests the same in equities, bonds, money market instruments and/or other securities. And the income /
                                gains generated from this collective investment
                            </p>
                            <p>
                                <a href="https://www.amfiindia.com/investor-corner/knowledge-center/what-are-mutual-funds-new.html" class="btn btn-secondary py-2 px-3">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="https://www.forbes.com/advisor/in/investing/best-trading-apps/" class="block-20" style="background-image: url('{{ asset('assets/images/3.jpg') }}');"></a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="#"> <span class="fa fa-calendar mr-2"></span>apr,1 2020</a>
                                    <a href="#"> <span class="fa fa-user mr-2"></span>Admin</a>
                                    <a href="#" class="meta-chat">
                                        <span class="fa fa-comment mr-2"></span>
                                        3
                                    </a>
                                </p>
                            </div>
                            <h3 class="heading">
                                <a href="https://www.forbes.com/advisor/in/investing/best-trading-apps/">13 Best Trading Apps In India for April 2024</a>
                            </h3>
                            <p>
                                India offers a wide variety of trading platforms that cater to both novice and experienced investors alike. carefully assessing their features, user-friendliness, security measures, and customer support.
                            </p>
                            <p>
                                <a href="https://www.forbes.com/advisor/in/investing/best-trading-apps/" class="btn btn-secondary py-2 px-3">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- blogs section ends  here ....! -->
    </section>
@endsection
