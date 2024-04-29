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
                    <h2 class="mb-3">Advance Derivative Analysis</h2>
                    <p>
                        You can learn about many derivatives topics at IISM, including options, futures, and swaps. Furthermore, as these notions are quite complicated in nature, you will learn to distinguish between them. Additionally, you’ll
                        learn how to control the risks involved with futures trading. Our teachers help you to drag out maximum return on your investments. Yes, there is uncertain movement of stocks everyday but we are here at IISM to guide you
                        the way to invest.
                    </p>
                
                    <p>
                        <img src="{{ asset('assets/images/6.jpg') }}" alt="" class="mx-auto d-block img-fluid" />
                    </p>
                
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="">
                                    <h1>Eligiblity</h1>
                                    <ol>
                                        <li>Traders / Speculators / Arbitrager</li>
                                        <li>Intermediaries of Securities Market.</li>
                                        <li>Trainers</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="">
                                    <h1>Benefits</h1>
                                    <ol>
                                        <li>To learn about market hedging strategies</li>
                                        <li>For the market to deliver a meaningful ROI</li>
                                        <li>
                                            To understand the market’s potential and limitations
                                        </li>
                                        <li>
                                            Recognizing the arbitrage possibilities of the market
                                        </li>
                                        <li>In order to increase market leverage</li>
                                        <li>
                                            A thorough understanding of complex derivatives trading technique
                                        </li>
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
                                        <li>Overview of derivatives and their products</li>
                                        <li>Using hedging in live markets</li>
                                        <li>How to use derivatives to make inexpensive trades</li>
                                        <li>How to comprehend features and open interest</li>
                                        <li>The usage of Greeks in the options market</li>
                                        <li>Utilizations of Derivatives in Various Markets</li>
                                        <li>Arbitrage and its potential to generate income</li>
                                        <li>A sophisticated options trading technique</li>
                                        <li>What the VIX is and how trading uses it</li>
                                        <li>Interpretations of market indicators</li>
                                        <li>Beneﬁts of PCR Ratio in Live Trading</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="">
                                    <h1>Essentials</h1>
                                    <ol>
                                        <li>Personal instruction from experienced traders</li>
                                        <li>Membership in our Trading Community for Life</li>
                                        <li>Knowledge of the live trading screen</li>
                                        <li>Small classes for individualised instruction</li>
                                        <li>Actual case studies</li>
                                        <li>Services for Career Placements</li>
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
                                        <td data-label="Course">Advance Derivative Analysis</td>
                                        <td data-label="Fees">₹10,000 + GST</td>
                                        <td data-label="Duration">01 Months</td>
                                    </tr>
                                    <h3><b>*NISM Certificate fee will be extra.</b></h3>
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
