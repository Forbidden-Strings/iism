<!-- nav bar starts here ...! -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{url("/")}}"> <img class="logo" src="{{asset('assets/images/LOGO.png')}}" alt="logo" /> 
<div>
    <span class="text-loco"> INTERNATIONAL INSTITUTE</span>
    <span class="text-loco"> OF SECURITIES MARKET </span>
</div>
</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"><i class="fa-solid fa-bars"></i></span>
            Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @php $route = request()->url() @endphp

                @foreach ([
                    'Home' => 'page.home',
                    'About' => 'page.about',
                    'Course' => 'page.course',
                    'Blogs' => 'page.blogs',
                    'Contact' => 'page.contact',
                ] as $title => $routeName)
                    @php $path = route($routeName) @endphp
                    @php $isActive = $route == $path @endphp

                    <li class="nav-item @if ($isActive) active @endif">
                        <a href="{{ $path }}" class="nav-link" aria-current="page">{{ $title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
<!-- END navbar -->