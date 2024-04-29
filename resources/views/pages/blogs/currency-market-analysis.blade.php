@extends('layouts.maximal')

@section('header')
    @php
        OpenGraph::setTitle('');
        OpenGraph::setDescription('');

        SEOMeta::setTitle('');
        SEOMeta::setTitleDefault('article');
        SEOMeta::setDescription('');
        SEOMeta::setKeywords('');
    @endphp
@endsection

@section('content')
    <div class="section-layer"></div>

    <section class="ftco-section ftco-no-pt ftco-no-pb mt-4">
        <div class="container">
            <div class="row">
                <div class="ftco-animate py-md-5 mt-md-5">
                    <h2 class="mb-3">Currency Market Analysis</h2>
                    <p>
                        Bootcamp for foreign exchange course is intended to transform you into a master Forex trader in only a few short weeks. At IISM you’ll learn in this course how to use sophisticated technical indicators to spot market
                        trends and situations. By mastering these tried-and-true techniques, you may easily increase your trading return and steadily expand your wealth. Additionally, you’ll learn how to use the world’s most proﬁtable
                        candlesticks and chart patterns to trade price action. In the shortest amount of time feasible, this course will assist you in turning into a proﬁtable Forex trader.
                    </p>

                    <p>
                        <img src="{{ asset('assets/images/10.png') }}" alt="" class="mx-auto d-block img-fluid" />
                    </p>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="">
                                    <h1>Eligiblity</h1>
                                    <ol>
                                        <li>Investors</li>
                                        <li>Intermediaries of Securities Market.</li>
                                        <li>Traders / Speculators / Arbitrager</li>
                                        <li>Trainers</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="">
                                    <h1>Why Forex Training</h1>
                                    <ol>
                                        <li>Time ﬂexibility</li>
                                        <li>High rate of return international exposure</li>
                                        <li>Low trading expenses</li>
                                        <li>
                                            Recognizing the arbitrage possibilities of the market
                                        </li>
                                        <li>If you wish to trade with huge leverage</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="">
                                    <h1>Course Details</h1>
                                    <ol>
                                        <li>
                                            Introduction to the course, objectives, market places & structure, orders, strategies,
                                        </li>
                                        <li>
                                            Trading situations, risk management, using the live trading session
                                        </li>
                                        <li>
                                            More advanced strategies, building a trading plan, exit
                                        </li>
                                        <li>
                                            Strategies, trading styles, mean reversion, risk Vs reward, index arbitrage, pairs trading, market participants
                                        </li>
                                        <li>
                                            Special session for Advance option for using option trading strategy
                                        </li>
                                        <li>
                                            Market structure, statistical arbitrage, arbitrage & option slides
                                        </li>
                                        <li>
                                            Trading psychology & psychological hurdles, objective setting, app
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <h1>Responsive table</h1> -->
                    <div class="bf-container bf-p-t-2 bf-p-b-2">
                        <div class="bf-table-responsive bf-table-responsive--zebra">
                            <table class="table">
                                <thead>
                                    <th>Course</th>
                                    <th>Fees</th>
                                    <th>Duration</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="Course">Currency Market Analysis</td>
                                        <td data-label="Fees">₹10,000 + GST</td>
                                        <td data-label="Duration">01 Months</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- .col-md-8 -->
            </div>
        </div>
    </section>

    <hr />

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
