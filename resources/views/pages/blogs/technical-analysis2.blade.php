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
                    <h2 class="mb-3">Technical Analysis</h2>
                    <p>
                        The effectiveness of technical analysis is not universally acknowledged. Data in the past
                        demonstrated that individuals making short- or long-term predictions of closing prices based on
                        historical data weren’t any better
                        than guessing. We now have computers with powerful processing capabilities, which may help us come
                        closer to the accurate numbers. No matter if you want to manage your own trading strategy, give
                        advice to others, or
                        learn about forecasting ideas. IISM provides courses that were created in collaboration with leaders
                        and subject-matter specialists.
                    </p>

                    <p>
                        <img src="{{ asset('assets/images/7.jpg') }}" alt="" class="mx-auto d-block img-fluid" />
                    </p>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="">
                                    <h1>Eligiblity</h1>
                                    <ol>
                                        <li>Introduction to Technical Analysis</li>
                                        <li>Percentage Retracements</li>
                                        <li>Trend Analysis</li>
                                        <li>Reversal Days</li>
                                        <li>Support and Resistance</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="">
                                    <h1>Benefits</h1>
                                    <ol>
                                        <li>To understand when to enter and exit the market</li>
                                        <li>To comprehend market ﬁnancial indicators</li>
                                        <li>
                                            To understand the market’s potential and limitations
                                        </li>
                                        <li>To comprehend market ﬁnancial indicators</li>
                                        <li>
                                            Using tools and strategies to determine market trends
                                        </li>
                                        <li>
                                            To be aware of the market’s strengths and weaknesses
                                        </li>
                                        <li>
                                            Must be aware of the appropriate stop loss level for securities
                                        </li>
                                        <li>
                                            Using tools and strategies to determine market trends
                                        </li>
                                        <li>To increase the actual investment’s return</li>
                                        <li>
                                            Must be aware of the appropriate stop loss level for securities
                                        </li>
                                        <li>To increase the return on investment</li>
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
                                        <li>Introduction to Technical Analysis</li>
                                        <li>Percentage Retracements</li>
                                        <li>Bollinger Bands</li>
                                        <li>Inverted Head and Shoulders</li>
                                        <li>Island Reversals</li>
                                        <li>Percentage Retracements</li>
                                        <li>Trend Analysis</li>
                                        <li>Reversal Days</li>
                                        <li>Major Reversal Patterns</li>
                                        <li>Double and Triple Bottoms</li>
                                        <li>Trend Analysis</li>
                                        <li>Reversal Days</li>
                                        <li>Oscillators (RSI, MACD, STOCHSTICS etc)</li>
                                        <li>Support and Resistance</li>
                                        <li>Price Gaps</li>
                                        <li>Head and Shoulders</li>
                                        <li>Rounded Bottoms</li>
                                        <li>Support and Resistance</li>
                                        <li>Price Gaps</li>
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
                                        <td data-label="Course">Technical Analysis</td>
                                        <td data-label="Fees">₹15,000 + GST</td>
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
