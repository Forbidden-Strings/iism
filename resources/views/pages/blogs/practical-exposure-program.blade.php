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
                    <h2 class="mb-3">Practical Exposure Program</h2>
                    <p>
                        You should think about the following before selecting a trading course or any trader training. Does the trading course continually change to reﬂect how the market is dynamic? Does it place a lot of emphasis on developing
                        players’ skills, strategies, and edges? Does the trader training take into account the tactics, procedures, and habits of successful, high-performing traders? Last but not least, do the instructors teaching the courses
                        have experience training traders? Our trading courses are exclusively constructed using the aforementioned framework and value, and they are continually improved based on discussions with the professional Community of
                        top traders at IIISM.
                    </p>

                    <p>
                        <img src="{{ asset('assets/images/2.jpg') }}" alt="" class="mx-auto d-block img-fluid" />
                    </p>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="">
                                    <h1>Eligiblity</h1>
                                    <ol>
                                        <li>Trader</li>
                                        <li>Speculators</li>
                                        <li>Investors</li>
                                        <li>professional</li>
                                        <li>Management students</li>
                                        <li>Intermediaries of stock market</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="">
                                    <h1>Benefits</h1>
                                    <ol>
                                        <li>To comprehend trading methods and tools</li>
                                        <li>To manage your portfolio independently</li>
                                        <li>To preserve return on investment</li>
                                        <li>
                                            To learn about the integration of the world market
                                        </li>
                                        <li>To prudently maintain the risk-to-reward ratio</li>
                                        <li>Must be aware of trading best practises</li>
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
                                        <li>Equity Market</li>
                                        <li>Commodity and Currency Trading</li>
                                        <li>Fundamental Analysis</li>
                                        <li>Derivatives Trading Techniques</li>
                                        <li>Mutual Funds Analysis</li>
                                        <li>Technical Analysis</li>
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
                                        <td data-label="Course">Practical Exposure Program</td>
                                        <td data-label="Fees">₹25,000 + GST</td>
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
