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
                    <h2 class="mb-3">NISM Certiﬁcation</h2>
                    <p>
                        India’s market participants are assisted by NISM in raising the calibre and proﬁciency of their ﬁnancial skills. This enables them to offer everyone wishing to invest in the ﬁnancial markets high-quality services and
                        actions. They are able to assist investors in making knowledgeable decisions about how to invest their money thanks to the knowledge they have acquired via the numerous courses and certiﬁcations offered by NISM. We here
                        at IISM educating & helping candidates to qualify the certiﬁcate and look ahead for the better future.
                    </p>

                    <p>
                        <img src="{{ asset('assets/images/work-6.jpg') }}" alt="" class="mx-auto d-block img-fluid" />
                    </p>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="">
                                    <h1>Eligiblity</h1>
                                    <ol>
                                        <li>Traders / Speculators / Arbitrager</li>
                                        <li>Intermediaries of Securities Market. .</li>

                                        <li>Trainers</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="">
                                    <h1>Beneﬁts</h1>
                                    <ol>
                                        <li>To learn about market hedging strategies</li>
                                        <li>For the market to deliver a meaningful ROI</li>
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
                                        <li>Overview of derivatives and their</li>
                                        <li>Using hedging in live markets</li>
                                        <li>How to use derivatives to make inexpensive trades</li>
                                        <li>How to comprehend features and open interest</li>
                                        <li>
                                            Special session for Advance option for using option trading strategy
                                        </li>
                                        <li>The signiﬁcance of VIX in option trading</li>
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
                                        <td data-label="Course">NISM Certiﬁcation</td>
                                        <td data-label="Fees">₹10,000 + GST</td>
                                        <td data-label="Duration">01 Months</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
