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
                    <h2 class="mb-3">Stock Trading Expert (Basic to Advance)</h2>
                    <p>
                        To build a strong knowledge base on the numerous tools and procedures needed to comprehend how capital markets operate. IISM launched the Certiﬁcation in Online Stock Market for Beginners. It is a stock market basics
                        course that is properly developed.
                    </p>

                    <p>
                        <img src="{{ asset('assets/images/1.jpg') }}" alt="" class="mx-auto d-block img-fluid" />
                    </p>
                    <p>
                        It provides a fundamental understanding of terms including equity, initial public offerings (IPOs), derivatives, technical analysis of the stock market, macroeconomics, and ﬁnancial planning. It is the ideal combination
                        of technical analysis, which will use chart analysis to determine the optimal entry and exit points and prices, and fundamental analysis of stocks, which will assist the investor in selecting the best ﬁrm
                    </p>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="">
                                    <h1>Eligiblity</h1>
                                    <ol>
                                        <li>Graduate and Post Graduate students</li>
                                        <li>House Wives.</li>
                                        <li>Retiredperson.</li>
                                        <li>Working professional</li>
                                        <li>High Net worth Individual.</li>
                                        <li>Investors.</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="">
                                    <h1>Benefits</h1>
                                    <ol>
                                        <li>
                                            If you want to earn some extra money working from home
                                        </li>
                                        <li>
                                            If you wish to work in the ﬁnancial services sector
                                        </li>
                                        <li>
                                            If you’d like to begin investing in the stock market
                                        </li>
                                        <li>
                                            If you prefer to manage your account independently
                                        </li>
                                        <li>
                                            You can create your own call for live trading if you wish to.
                                        </li>
                                        <li>
                                            If you want to know when to enter and quit a share transaction,
                                        </li>
                                        <li>
                                            If you’re interested in ﬁnding out the beneﬁts and drawbacks of investing in the stock market
                                        </li>
                                        <li>
                                            If you wish to increase your fortune in the stock market while staying in a bank’s air conditioning,
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bf-container bf-p-t-2 bf-p-b-2">
                        <!-- <h1>Responsive table</h1> -->
                        <div class="bf-table-responsive bf-table-responsive--zebra">
                            <table class="table">
                                <thead>
                                    <th>Course</th>
                                    <th>Fees</th>
                                    <th>Duration</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="Course">StockTradingExpert</td>
                                        <td data-label="Fees">₹25,000+GST</td>
                                        <td data-label="Duration">02-03Months</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- .col-md-8 -->
            </div>
        </div>

        <hr />
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
