@extends('layouts.maximal')

@section('content')
    @include('sections/top/header')

    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">INTERNATIONAL INSTITUTE OF SECURITIES MARKET </span>
                    <h1 class="mb-4">Dream It, Learn It, Achieve It</h1>
                    <p class="mb-0">
                        <a href="{{ route('page.course') }}" class="btn btn-primary">Our Course</a>
                        <a href="{{ route('page.blogs') }}" class="btn btn-white">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5 order-md-last">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="mb-4">Enroll Now</h3>

                        @if (old('status'))
                            <div class="alert alert-success" role="alert">
                                {{ Arr::get(old('status'), 'message') }}
                            </div>

                            <br />
                        @endif

                        <br />

                        <form method="post" action="{{ route('page.home.store') }}" class="signup-form">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="label" for="name">Full Name</label>
                                <input type="text" class="form-control" name="full_name" id="full_name"
                                    placeholder="Enter your full name" value="{{ old('full_name') }}" />

                                @if ($errors->has('full_name'))
                                    <p class="lead" style="color: red;">
                                        <small> {{ $errors->first('full_name') }} </small>
                                    </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label" for="email">Email Address</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Enter you email" />

                                @if ($errors->has('email'))
                                    <p class="lead" style="color: red;">
                                        <small> {{ $errors->first('email') }} </small>
                                    </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label" for="phone_number">Contact no</label>
                                <input id="password-field" type="contact no" name="phone_number" id="phone_number"
                                    class="form-control" placeholder=" Enter you Contact no" />

                                @if ($errors->has('phone_number'))
                                    <p class="lead" style="color: red;">
                                        <small> {{ $errors->first('phone_number') }} </small>
                                    </p>
                                @endif
                            </div>
                            <div class="form-group d-flex justify-content-centre mt-4">
                                <button type="submit" id="submit" class="btn btn-primary submit">
                                    <span class="fa fa-paper-plane"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 col-lg-2">
                    <a href="#" class="course-category img d-flex align-items-center justify-content-center golu">
                        <div class="text w-100 text-center">
                            <h3>Free Demat Account</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <a href="#" class="course-category img d-flex align-items-center justify-content-center golu">
                        <div class="text w-100 text-center">
                            <h3>1 Year Fees Validity</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <a href="#" class="course-category img d-flex align-items-center justify-content-center golu">
                        <div class="text w-100 text-center">
                            <h3>Live Demo Classes</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <a href="#" class="course-category img d-flex align-items-center justify-content-center golu">
                        <div class="text w-100 text-center">
                            <h3>NISM Certiﬁcation</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <a href="#" class="course-category img d-flex align-items-center justify-content-center golu">
                        <div class="text w-100 text-center">
                            <h3>NISM Certiﬁed Trainers</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- cource section starts here ...! -->

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Online Course</span>
                    <h2 class="mb-4">Pick Your Course</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'basic-to-advance']) }}" class="img"
                            style="background-image: url('{{ asset('assets/images/1.jpg') }}');">
                            <span class="price">Stock Trading Expert </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'basic-to-advance']) }}">Stock Trading
                                    Expert (Basic to Advance)</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>02-03 Months</li>
                                <li class="price">₹ 25,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'practical-exposure-program']) }}"
                            class="img" style="background-image: url('{{ asset('assets/images/2.jpg') }}');">
                            <span class="price">Practical Exposure Program</span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'practical-exposure-program']) }}">Practical
                                    Training Would Be Provided In This Course </a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹25,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'technical-analysis']) }}" class="img"
                            style="background-image: url('{{ asset('assets/images/3.jpg') }}');">
                            <span class="price">Technical Analysis </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'technical-analysis']) }}">Using tools
                                    and strategies to determine market trends</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <span class="flaticon-shower"></span>
                                    1 Months
                                </li>
                                <li class="price">₹10,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'advance-derivative-analysis']) }}"
                            class="img" style="background-image: url('{{ asset('assets/images/4.jpg') }}');">
                            <span class="price">Advance Derivative Analysis</span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'advance-derivative-analysis']) }}">Understanding
                                    of complex derivatives trading technique</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹10,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'currency-market-analysis']) }}"
                            class="img" style="background-image: url('{{ asset('assets/images/10.png') }}');">
                            <span class="price">Currency Market Analysis</span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'currency-market-analysis']) }}">More
                                    advanced strategies, building a trading plan, exit </a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">
                                    ₹10,000 + GST
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'mutual-fund-analysis']) }}" class="img"
                            style="background-image: url('{{ asset('assets/images/8.jpg') }}');">
                            <span class="price">Mutual Fund Analysis </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'mutual-fund-analysis']) }}">Introduction
                                    to Mutual fund market and its structure</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹10,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'specialized-trainings']) }}" class="img"
                            style="background-image: url('{{ asset('assets/images/6.jpg') }}');">
                            <span class="price">Specialized Trainings </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'specialized-trainings']) }}">Market
                                    structure,statistical arbitrage, arbitrage & option slides </a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹10,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'advance-derivative-analysis']) }}"
                            class="img" style="background-image: url('{{ asset('assets/images/7.jpg') }}');">
                            <span class="price">NISM Certification </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'nism-certifications']) }}">The
                                    significance of VIX in option trading</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹10,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'mutual-fund-certifications']) }}"
                            class="img" style="background-image: url('{{ asset('assets/images/10.png') }}');">
                            <span class="price">Mutual Fund Certifications </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'mutual-fund-certifications']) }}">If
                                    you wish to launch your SIP on your own, without an agent's assistance</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹10,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- cource section ends here ...! -->




    {{-- offline course starts here  --}}



    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Offline Course</span>
                    <h2 class="mb-4">Pick Your Course</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'basic-to-advance2']) }}" class="img"
                            style="background-image: url('{{ asset('assets/images/1.jpg') }}');">
                            <span class="price">Stock Trading Expert </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'basic-to-advance2']) }}">Stock Trading
                                    Expert (Basic to Advance)</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>02-03 Months</li>
                                <li class="price">₹ 40,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'practical-exposure-program2']) }}"
                            class="img" style="background-image: url('{{ asset('assets/images/2.jpg') }}');">
                            <span class="price">Practical Exposure Program</span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'practical-exposure-program2']) }}">Practical
                                    Training Would Be Provided In This Course </a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹35,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'technical-analysis2']) }}" class="img"
                            style="background-image: url('{{ asset('assets/images/3.jpg') }}');">
                            <span class="price">Technical Analysis </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'technical-analysis2']) }}">Using tools
                                    and strategies to determine market trends</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <span class="flaticon-shower"></span>
                                    1 Months
                                </li>
                                <li class="price">₹15,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'advance-derivative-analysis']) }}"
                            class="img" style="background-image: url('{{ asset('assets/images/4.jpg') }}');">
                            <span class="price">Advance Derivative Analysis</span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'advance-derivative-analysis']) }}">Understanding
                                    of complex derivatives trading technique</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹10,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'currency-market-analysis']) }}"
                            class="img" style="background-image: url('{{ asset('assets/images/10.png') }}');">
                            <span class="price">Currency Market Analysis</span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'currency-market-analysis']) }}">More
                                    advanced strategies, building a trading plan, exit </a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">
                                    ₹10,000 + GST
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'mutual-fund-analysis']) }}" class="img"
                            style="background-image: url('{{ asset('assets/images/8.jpg') }}');">
                            <span class="price">Mutual Fund Analysis </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'mutual-fund-analysis']) }}">Introduction
                                    to Mutual fund market and its structure</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹10,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'specialized-trainings']) }}" class="img"
                            style="background-image: url('{{ asset('assets/images/6.jpg') }}');">
                            <span class="price">Specialized Trainings </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'specialized-trainings']) }}">Market
                                    structure,statistical arbitrage, arbitrage & option slides </a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹10,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'advance-derivative-analysis']) }}"
                            class="img" style="background-image: url('{{ asset('assets/images/7.jpg') }}');">
                            <span class="price">NISM Certification </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'nism-certifications']) }}">The
                                    significance of VIX in option trading</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹10,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ route('page.blogs.article', ['slug' => 'mutual-fund-certifications']) }}"
                            class="img" style="background-image: url('{{ asset('assets/images/10.png') }}');">
                            <span class="price">Mutual Fund Certifications </span>
                        </a>
                        <div class="text p-4">
                            <h3>
                                <a href="{{ route('page.blogs.article', ['slug' => 'mutual-fund-certifications']) }}">If
                                    you wish to launch your SIP on your own, without an agent's assistance</a>
                            </h3>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>01 Months</li>
                                <li class="price">₹10,000 + GST</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    {{-- 
offline course ends here --}}












    <!--
                                                                
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            blog  -->

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
                    <h2 class="mb-3">Directors Message</h2>
                    <h3 class="mb-3">Nishant Shekhar & Pooja Chauhan (FOUNDER)</h3>
                    <p>
                        All of the people in the market desire to increase their money, but only a select few are successful
                        in doing so. The majority of people fall prey to Ponzi schemes and other fraudulent practises. If we
                        conduct study on
                        this subject, we will discover that people lack investment expertise, which prevents them from
                        making independent investment decisions. We have come to the conclusion that an investor can prevent
                        market conﬂict by
                        conducting careful research before making an investment. Investors must seek professional assistance
                        before beginning their investments and must learn the process gradually. Only 3% of individuals in
                        our country actually
                        have any knowledge of investment products or ﬁnancial planning, making the concept of investment
                        education rather new. The most powerful thing is a human mind. If a person wants to achieve ﬁnancial
                        freedom, we think that
                        investing education is one of the most crucial things in life.
                    </p>
                    <p>
                        <img src="{{ asset('assets/images/image_1.jpg') }}" alt="" class="img-fluid" />
                    </p>
                    <p>
                        IISM aims to provide stock market courses in Dehradun Changing investor misconceptions about the
                        stock market is something we want to do. Our training programmes assist investors in assessing risk,
                        selecting the best
                        product for their needs, and comprehending the fundamentals of online trading. Our mentors are
                        committed to teaching participants the skills they need to succeed in the stock market. Our best
                        wishes are with investors,
                        and we are delighted when our programmes assist them in selecting the appropriate product at the
                        right moment in the right location, allowing their capital to increase over time.
                    </p>
                    <h2 class="mb-3 mt-5">Our Mentors</h2>

                    <p>
                        Faculty members are backbone of any education institutions and we are lucky that our faculty members
                        are dedicated professional traders. Our live training methodology make our course unique and help us
                        to differentiate
                        from our competitors. We believe that our participant must be fully satisﬁed so that they can create
                        their passive income source from stock market. IISM stock school strongly believe in developing
                        online trading skills
                        and enhancing their risk and reward calculating abilities. Our mentors helps participant to control
                        emotions, greed when they take investment decision.
                    </p>
                    <p>
                        <img src="{{ asset('assets/images/didi.jpg') }}" alt="" class="img-fluid" />
                    </p>
                    <p>
                        Faculty member always give chance to participant to do the things at their own end and help them by
                        one on one mentor ship for live trading session at our ﬂoor which is equipped with latest tools and
                        techniques. We not
                        only train the participant but also guide & motivate them to achieve their Financial goal in life
                        with limited resources. IISM conduct training of the trainer program time to time for capacity
                        building of the mentors and
                        also help them to equip with latest tools & techniques.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--
                                                                                                                    blog   ends-->

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url('{{ asset('assets/images/bg_4.jpg') }}');">
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
                            <span> 100 % PLACEMENT ASSISTANCE </span>
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
                            <span> GET ALL FREE STUDY MATERIAL  ...!  </span>
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
                                        Attending IISM Dehradun Trading Institute was a game-changer for me. The instructors
                                        were incredibly knowledgeable and patient, guiding me through complex concepts with
                                        ease.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url('{{ asset('assets/images/priyanshu.jpg') }}');">
                                        </div>
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
                                        I enrolled in IISM Trading Institute hoping to gain skills. The curriculum was good,
                                        covering everything from technical analysis to risk management.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url('{{ asset('assets/images/nidhi.jpg') }}');">
                                        </div>
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
                                        The faculty members were always available to answer questions and offer support. I
                                        feel much more confident in my trading abilities after completing the program
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url('{{ asset('assets/images/amit.jpg') }} ');">
                                        </div>
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
                                        I had a fantastic experience at DEF Trading Institute. The instructors were engaging
                                        and passionate about teaching, making the learning process enjoyable.
                                    </p>

                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url('{{ asset('assets/images/person_1.jpg') }}');">
                                        </div>
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
                                        The interactive nature of the classes kept me engaged, and I appreciated the
                                        emphasis on real-world application. I now have a solid foundation in trading that I
                                        can build upon
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('assets/images/komal.jpg') }}');"></div>
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
                            <a href="{{ route('page.contact') }}" class="btn btn-primary px-4 py-3">Enroll Now</a>
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
                            Faculty member always give chance to participant to do the things at their own end and help them
                            by one on one mentor ship for live trading session at our ﬂoor which is equipped with latest
                            tools and techniques. We
                            not only train the participant but also guide & motivate them to achieve their Financial goal in
                            life with limited resources. IISM conduct training of the trainer program time to time for
                            capacity building of the
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

    <!-- blogs section starts here ....! -->

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
                        <a href="https://www.investopedia.com/technical-analysis-4689657#:~:text=Technical%20analysis%20is%20an%20investing,More%20What%20is%20technical%20analysis%3F"
                            class="block-20" style="background-image: url('{{ asset('assets/images/2.jpg') }}');"></a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a
                                        href="https://www.investopedia.com/technical-analysis-4689657#:~:text=Technical%20analysis%20is%20an%20investing,More%20What%20is%20technical%20analysis%3F">
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
                                <a
                                    href="https://www.investopedia.com/technical-analysis-4689657#:~:text=Technical%20analysis%20is%20an%20investing,More%20What%20is%20technical%20analysis%3F">Technical
                                    Analysis</a>
                            </h3>
                            <p>
                                Technical analysis is the study of the price movement and patterns of a security. By
                                scrutinizing a security's past price action, primarily through charts and indicators,
                                traders can forecast future price
                                direction.
                            </p>
                            <p>
                                <a href="https://www.investopedia.com/technical-analysis-4689657#:~:text=Technical%20analysis%20is%20an%20investing,More%20What%20is%20technical%20analysis%3F"
                                    class="btn btn-secondary py-2 px-3">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="https://www.amfiindia.com/investor-corner/knowledge-center/what-are-mutual-funds-new.html"
                            class="block-20" style="background-image: url('{{ asset('assets/images/5.jpg') }}');"></a>
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
                                <a
                                    href="https://www.amfiindia.com/investor-corner/knowledge-center/what-are-mutual-funds-new.html">WHAT
                                    ARE MUTUAL FUNDS?</a>
                            </h3>
                            <p>
                                It is a trust that collects money from a number of investors who share a common investment
                                objective and invests the same in equities, bonds, money market instruments and/or other
                                securities. And the income /
                                gains generated from this collective investment
                            </p>
                            <p>
                                <a href="https://www.amfiindia.com/investor-corner/knowledge-center/what-are-mutual-funds-new.html"
                                    class="btn btn-secondary py-2 px-3">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="https://www.forbes.com/advisor/in/investing/best-trading-apps/" class="block-20"
                            style="background-image: url('{{ asset('assets/images/3.jpg') }}');"></a>
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
                                <a href="https://www.forbes.com/advisor/in/investing/best-trading-apps/">13 Best Trading
                                    Apps In India for April 2024</a>
                            </h3>
                            <p>
                                India offers a wide variety of trading platforms that cater to both novice and experienced
                                investors alike. carefully assessing their features, user-friendliness, security measures,
                                and customer support.
                            </p>
                            <p>
                                <a href="https://www.forbes.com/advisor/in/investing/best-trading-apps/"
                                    class="btn btn-secondary py-2 px-3">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- blogs section ends  here ....! -->
    </section>

    <!-- sponser section starts here ...! -->
    <div class="container">
        <h2 class="text-lg mb-3 mt-5">Sponsors</h2>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img src="{{ asset('assets/images/logo-1.png') }}" class="img-fluid m-auto d-flex" />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img src="{{ asset('assets/images/logo-2.png') }}" class="img-fluid m-auto d-flex" />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img src="{{ asset('assets/images/logo-3.jpg') }}" class="img-fluid m-auto d-flex" />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img src="{{ asset('assets/images/logo-4.png') }}" class="img-fluid m-auto d-flex" />
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img src="{{ asset('assets/images/logo-5.jpg') }}" class="img-fluid m-auto d-flex" />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img src="{{ asset('assets/images/logo-6.jpg') }}" class="img-fluid m-auto d-flex" />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img src="{{ asset('assets/images/logo-7.png') }}" class="img-fluid m-auto d-flex" />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img src="{{ asset('assets/images/logo-8.png') }}" class="img-fluid m-auto d-flex" />
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img src="{{ asset('assets/images/logo-9.png') }}" class="img-fluid m-auto d-flex" />
            </div>
        </div>
    </div>
@endsection
