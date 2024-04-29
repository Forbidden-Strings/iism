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
                        {{ Str::ucfirst(Str::after(request()->route()->getName(), '.')) }}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- 
                blog  -->

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
                    <h2 class="mb-3">Directors Message</h2>
                    <h3 class="mb-3">Nishant Shekhar & Pooja Chauhan (FOUNDER)</h3>
                    <p>
                        All of the people in the market desire to increase their money, but only a select few are successful in doing so. The majority of people fall prey to Ponzi schemes and other fraudulent practises. If we conduct study on
                        this subject, we will discover that people lack investment expertise, which prevents them from making independent investment decisions. We have come to the conclusion that an investor can prevent market conﬂict by
                        conducting careful research before making an investment. Investors must seek professional assistance before beginning their investments and must learn the process gradually. Only 3% of individuals in our country actually
                        have any knowledge of investment products or ﬁnancial planning, making the concept of investment education rather new. The most powerful thing is a human mind. If a person wants to achieve ﬁnancial freedom, we think that
                        investing education is one of the most crucial things in life.
                    </p>
                    <p>
                        <img src="{{ asset('assets/images/image_1.jpg') }}" alt="" class="img-fluid" />
                    </p>
                    <p>
                        IISM aims to provide stock market courses in Dehradun Changing investor misconceptions about the stock market is something we want to do. Our training programmes assist investors in assessing risk, selecting the best
                        product for their needs, and comprehending the fundamentals of online trading. Our mentors are committed to teaching participants the skills they need to succeed in the stock market. Our best wishes are with investors,
                        and we are delighted when our programmes assist them in selecting the appropriate product at the right moment in the right location, allowing their capital to increase over time.
                    </p>
                    <h2 class="mb-3 mt-5">Our Mentors</h2>
                    <p>
                        Faculty members are backbone of any education institutions and we are lucky that our faculty members are dedicated professional traders. Our live training methodology make our course unique and help us to differentiate
                        from our competitors. We believe that our participant must be fully satisﬁed so that they can create their passive income source from stock market. IISM stock school strongly believe in developing online trading skills
                        and enhancing their risk and reward calculating abilities. Our mentors helps participant to control emotions, greed when they take investment decision.
                    </p>
                    <p>
                        <img src="{{ asset('assets/images/didi.jpg') }}" alt="" class="img-fluid" />
                    </p>
                    <p>
                        Faculty member always give chance to participant to do the things at their own end and help them by one on one mentor ship for live trading session at our ﬂoor which is equipped with latest tools and techniques. We not
                        only train the participant but also guide & motivate them to achieve their Financial goal in life with limited resources. IISM conduct training of the trainer program time to time for capacity building of the mentors and
                        also help them to equip with latest tools & techniques.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- 
                blog   ends-->

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('{{ asset('assets/images/bg_4.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex align-items-center">
                        <div class="icon">
                            <span class="flaticon-online"></span>
                        </div>
                        <div class="text">
                            <!-- <strong class="number" data-number="100%">%</strong> -->
                            <span> 100 % PLACEMENT ASSISTANCE</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex align-items-center">
                        <div class="icon">
                            <span class="flaticon-graduated"></span>
                        </div>
                        <div class="text">
                            <!-- <strong class="number" data-number="4500">0</strong> -->
                            <span>FREE STUDY MATERIAL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex align-items-center">
                        <div class="icon">
                            <span class="flaticon-instructor"></span>
                        </div>
                        <div class="text">
                            <!-- <strong class="number" data-number="1200">0</strong> -->
                            <span>TRAINED BY PROFESSIONAL TRADER</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex align-items-center">
                        <div class="icon">
                            <span class="flaticon-tools"></span>
                        </div>
                        <div class="text">
                            <!-- <strong class="number" data-number="300">0</strong> -->
                            <span>LEARN IN LVE STOCK MARKET SESSION</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial section starts here...! -->

    <section class="ftco-section testimony-section bg-light">
        <div class="overlay" style="background-image: url('{{ asset('assets/images/bg_2.jpg') }}');"></div>
        <div class="container">
            <div class="row pb-4">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">What Are Students Says</h2>
                </div>
            </div>
        </div>
        <div class="container container-2">
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">
                                        Attending IISM Dehradun Trading Institute was a game-changer for me. The instructors were incredibly knowledgeable and patient, guiding me through complex concepts with ease.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('{{ asset('assets/images/priyanshu.jpg') }}');"></div>
                                        <div class="pl-3">
                                            <p class="name">Priyanshu</p>
                                            <span class="position">Developer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">
                                        I enrolled in IISM Trading Institute hoping to gain skills. The curriculum was good, covering everything from technical analysis to risk management.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('{{ asset('assets/images/nidhi.jpg') }}');"></div>
                                        <div class="pl-3">
                                            <p class="name">Nidhi</p>
                                            <span class="position">House Wife</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">
                                        The faculty members were always available to answer questions and offer support. I feel much more confident in my trading abilities after completing the program
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('{{ asset('assets/images/amit.jpg')}} ');"></div>
                                        <div class="pl-3">
                                            <p class="name">Amit</p>
                                            <span class="position">Indian Army</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <!-- <span class="fa fa-star"></span> -->
                                    </p>
                                    <p class="mb-4">
                                        I had a fantastic experience at DEF Trading Institute. The instructors were engaging and passionate about teaching, making the learning process enjoyable.
                                    </p>

                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('{{ asset('assets/images/person_1.jpg') }}');"></div>
                                        <div class="pl-3">
                                            <p class="name">Deeraj Sharma</p>
                                            <span class="position">Football Coach</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <!-- <span class="fa fa-star"></span> -->
                                    </p>
                                    <p class="mb-4">
                                        The interactive nature of the classes kept me engaged, and I appreciated the emphasis on real-world application. I now have a solid foundation in trading that I can build upon
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{ asset('assets/images/komal.jpg') }}');"></div>
                                        <div class="pl-3">
                                            <p class="name">Komal Panwar</p>
                                            <span class="position">House wife</span>
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
    <!-- pink sections starts here ...! -->
    <section class="ftco-intro ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="img" style="background-image: url('{{ asset('assets/images/bg_4.jpg') }}');">
                        <div class="overlay"></div>
                        <h2>We Are Best Trading learning centre in Dehradun</h2>
                        <p>
                            Dream It, Learn It, Achieve It
                        </p>
                        <p class="mb-0">
                            <a href="contact.html" class="btn btn-primary px-4 py-3">Enroll Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pink sections ends  here ...! --><!-- about section starts here ...! -->

    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100 mb-4 mb-md-0">
                        <span class="subheading">Welcome to IISM </span>
                        <h2 class="mb-4">We Are The Best Trading Academy In Deharadun</h2>
                        <p>
                            Faculty member always give chance to participant to do the things at their own end and help them by one on one mentor ship for live trading session at our ﬂoor which is equipped with latest tools and techniques. We
                            not only train the participant but also guide & motivate them to achieve their Financial goal in life with limited resources. IISM conduct training of the trainer program time to time for capacity building of the
                            mentors and also help them to equip with latest tools & techniques.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-tools"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Top Quality Content</h3>
                                    <p>
                                        A thorough understanding of complex derivatives trading technique
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services">
                                <div class="icon icon-2 d-flex align-items-center justify-content-center">
                                    <span class="flaticon-instructor"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Highly Skilled Instructor</h3>
                                    <p>
                                        Personal instruction from experienced traders
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services">
                                <div class="icon icon-3 d-flex align-items-center justify-content-center">
                                    <span class="flaticon-quiz"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">World Class &amp; Quiz</h3>
                                    <p>
                                        Must be aware of trading best practises
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services">
                                <div class="icon icon-4 d-flex align-items-center justify-content-center">
                                    <span class="flaticon-browser"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">NISM Certification</h3>
                                    <p>
                                        Services for Career Placements
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends here ...! -->

@endsection
