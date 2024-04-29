<!-- footer section starts here ...! -->
<footer class="ftco-footer ftco-no-pt">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md pt-5">
                <div class="ftco-footer-widget pt-md-5 mb-4">
                    <h2 class="ftco-heading-2">About</h2>
                    <p>
                        IISM stock school strongly believe in developing online trading skills and enhancing their risk and reward calculating abilities. Our mentors helps participant to control emotions, greed when they take investment
                        decision.
                    </p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate">
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li class="ftco-animate">
                            <a href="#">
                                <span class="fa fa-facebook"></span>
                            </a>
                        </li>
                        <li class="ftco-animate">
                            <a href="#">
                                <span class="fa fa-instagram"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md pt-5">
                <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Help Desk</h2>
                    <ul class="list-unstyled">
                        @foreach([
                            'Customer Care' => null,
                            'Legal Help' => null,
                            'Services' => null,
                            'Privacy and Policy' => null,
                            'Call Us' => null,
                        ] as $helpDesk => $route)
                            <li>
                                <a 
                                    class="py-2 d-block"
                                    @if(empty($route))
                                        href="#"
                                    @else
                                        href="{{route($route)}}"
                                    @endif
                                >{{$helpDesk}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md pt-5">
                <div class="ftco-footer-widget pt-md-5 mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li>
                                <span class="icon fa fa-map-marker"></span>
                                <span class="text">Govind Nagar, Sahastradhara Road, Dehradun, Uttarakhand, 248001</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon fa fa-phone"></span>
                                    <span class="text"> +91 96257 35796</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon fa fa-paper-plane"></span>
                                    <span class="text">iismdehradun@gmail.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    All rights reserved | IISM DEHRADUN
            </div>
        </div>
    </div>
</footer>
