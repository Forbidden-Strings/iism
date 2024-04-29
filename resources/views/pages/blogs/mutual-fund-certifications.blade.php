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
                    <h2 class="mb-3">Mutual Fund Certiﬁcations</h2>
                    <p>
                        Yes, you need to clear the exam for Mutual Fund certiﬁcation. The exam assists candidates in learning the fundamentals of mutual funds, how they are distributed, how to analyze schemes, and how to plan the distribution
                        of mutual funds. IISM helped hundreds of students to clear the exam and get a high-paying jobs and some of them are earning on their own.
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
                                        <li>Housewife</li>
                                        <li>Retired person</li>
                                        <li>Graduate and Post Graduate students</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="">
                                    <h1>Essentials</h1>
                                    <ol>
                                        <li>Personal instruction from experienced traders</li>
                                        <li>Live case studies and the most recent research</li>
                                        <li>Experience on the Live Trading Floor</li>
                                        <li>Small Class Size for Personalized Learning</li>
                                        <li>Lifetime Membership in Our Trading Community</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="">
                                    <h1>Beneﬁts</h1>
                                    <ol>
                                        <li>
                                            If you wish to launch your SIP on your own, without an agent’s assistance
                                        </li>
                                        <li>
                                            If you lack the free time to research the stock market
                                        </li>
                                        <li>
                                            If you lack the necessary funds to purchase a large-cap stock
                                        </li>
                                        <li>
                                            If you lack the necessary information to grasp the industry
                                        </li>
                                        <li>
                                            If you wish to work as a mutual fund representative
                                        </li>
                                        <li>
                                            If you want to maximise the return on your free cash in your account
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
                                        <td data-label="Course">Mutual Fund Certiﬁcations</td>
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
