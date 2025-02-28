@extends('neumorph.layout.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/style-new.css') }}?v={{ env('CSS_VERSION') }}">
@endsection

@section('content')
    <nav>
        <div class="container nav-item">
            <div class="nav-logo phone-only">
                <a href="#intro">
                    <img src="{{ asset('assets/img/logo/tab-icon.png') }}" alt="">
                </a>
            </div>
            {{-- <img class="nav-logo phone-only" href="#intro" src="" alt=""> --}}
            <div class="nav-icon phone-only neumorph-pop">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="nav-menu neumorph-pop">
                <ul>
                    <li id="nav-intro" class="phone-only"><a href="#intro">Introduction</a></li>
                    <li id="nav-portfolio" class=""><a href="#portfolio">Our Work</a></li>
                    <li id="nav-benefit"><a href="#benefit">Benefit</a></li>
                    <li class="phone-hide">
                        <a href="#intro">
                            <img src="{{ asset('assets/img/logo/tab-icon.png') }}" alt="">
                        </a>
                    </li>
                    <li id="nav-sale"><a href="#sale">For Sale</a></li>
                    <li id="nav-team"><a href="#team">Team</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="intro" class="">
        <div class="bag">
            <h1>Big Digital Development</h1>
            <p>Your Best Partner for <br> <b>Website</b> and <b>Mobile Application</b> Development</p>
            <div class="contact">
                <a class="button neumorph-pop" href="https://wa.me/081311521443" target="blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a class="button neumorph-pop" href="mailto:tubagusflow@gmail.com" target="blank">
                    <i class="far fa-envelope"></i>
                </a>
                <a class="button neumorph-pop" href="https://www.instagram.com/tebe19_/" target="blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="splide" role="group" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($client as $item)
                        <li class="splide__slide">
                            <img src="{{ $item['fields']['image'][0]['thumbnails']['large']['url'] }}" alt="PediaSure">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section id="who" class="container">
        <h2 class="section-title">Who We Are</h2>
        <p class="section-sub-title">Full Team Digital Development</p>
        <div class="bag">
            <div class="row">
                <div class="col-lg-4 col-md-6 wrapper sec-one">
                    <div class="item">
                        <h3><span class="neumorph-pop"><i class="fas fa-lightbulb"></i></span> Business Analsyst</h3>
                        <p>The one who translate your business proccess from the first proccess to the end of the proccess
                            into a
                            very cool system</p>
                    </div>
                    <div class="item">
                        <h3><span class="neumorph-pop"><i class="fas fa-palette"></i></span>UI/UX Designer</h3>
                        <p>
                            Describer all of your website fantasies to become somethings that you can see with your
                            eyes
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sec-two">
                    <div class="item">
                        <div class="image">
                            <div class="neumorph-drop" style="">
                                <div class="neumorph-pop" style="">
                                    <img src="{{ asset('assets/img/logo/tab-icon.png') }}" alt="Big Digital Development"
                                        style="border-radius: 0px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wrapper sec-three">
                    <div class="item">
                        <h3><span class="neumorph-pop"><i class="fa-solid fa-code"></i></span> Mobile & Web Developer
                        </h3>
                        <p>Your technical design translator from Figma, Photoshop, or any web design tools into a
                            real website and application</p>
                    </div>
                    <div class="item">
                        <h3><span class="neumorph-pop"><i class="fas fa-tasks"></i></span> Project Manager</h3>
                        <p>Keeping the timeline always inline within the expectation, and makes everyone happy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="container">
        <h2 class="section-title">We Are Part of These</h2>
        <p class="section-sub-title">Being a Part of Bigger Team</p>
        <div uk-filter="target: .js-filter">

            <div class="uk-subnav uk-subnav-pill mb-4">
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                        <button class="uk-active neumorph-pop" uk-filter-control=".all">All Project</button>
                    </div>
                    @foreach ($categoriesexpProject as $item)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                            <button class="neumorph-pop"
                                uk-filter-control=".{{ $item['fields']['slug'] }}">{{ $item['fields']['name'] }}</button>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center">
                @foreach ($filteredexpProject as $item)
                    <div
                        class="col-lg-4 col-md-6 mb-4 @foreach ($item['fields']['category_slug'] as $categories) {{ $categories }} @endforeach all">
                        <div class="card neumorph-pop">
                            <div class="card-body">
                                <div class="image" type="button" data-bs-toggle="modal"
                                    data-bs-target="#{{ $item['id'] }}">
                                    <img src="{{ $item['fields']['screenshots'][0]['thumbnails']['large']['url'] }}"
                                        alt="">
                                </div>
                                <h3>{{ $item['fields']['name'] }}</h3>
                                <p>
                                    @foreach ($item['fields']['category_name'] as $cate)
                                        {{ $cate }} {{ $loop->last ? '' : ', ' }}
                                    @endforeach
                                </p>

                                <div class="modal fade" id="{{ $item['id'] }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                                <div id="carousel{{ $item['id'] }}" class="carousel slide"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @foreach ($item['fields']['screenshots'] as $img)
                                                            <div
                                                                class="carousel-item {{ $loop->first ? 'active' : ' ' }}">
                                                                <div class="box">
                                                                    <img src="{{ $img['url'] }}"
                                                                        class="mx-auto my-auto d-block" style="">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#carousel{{ $item['id'] }}"
                                                        data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#carousel{{ $item['id'] }}"
                                                        data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div
                    class="col-lg-4 col-md-6 @foreach ($categoriesexpProject as $item) {{ $item['fields']['slug'] }} @endforeach all">
                    <div class="card neumorph-pop">
                        <div class="card-body card-cta">
                            <div class="image">
                                <a href="#closing">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <h3>Add Your Web or Apps Here</h3>
                            <div class="contact">
                                <a class="button neumorph-pop" href="https://wa.me/081311521443" target="blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a class="button neumorph-pop" href="mailto:tubagusflow@gmail.com" target="blank">
                                    <i class="far fa-envelope"></i>
                                </a>
                                <a class="button neumorph-pop" href="https://www.instagram.com/tebe19_/" target="blank">
                                    <i class="fab fa-instagram"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="benefit" class="container">
        <h2 class="section-title">What You Might Get</h2>
        <p class="section-sub-title">Lots of Access for Your Website and Mobile Apps</p>
        <div class="row">
            @foreach ($benefit as $item)
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-4">
                    <div class="card neumorph-drop">
                        <div class="card-body">
                            <div class="wrapper">
                                <h3>{{ $item['fields']['name'] }} <span
                                        class="neumorph-pop">{!! $item['fields']['icon'] !!}</span></h3>
                                <p>{{ $item['fields']['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section id="sale" class="container">
        <h2 class="section-title">Ready To Use Website</h2>
        <p class="section-sub-title">Make it more efficient</p>
        <div uk-filter="target: .js-filter">

            <div class="uk-subnav uk-subnav-pill mb-4">
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                        <button class="uk-active neumorph-pop" uk-filter-control=".all">All Project</button>
                    </div>
                    @foreach ($categoriessaleProject as $item)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                            <button class="neumorph-pop"
                                uk-filter-control=".{{ $item['fields']['slug'] }}">{{ $item['fields']['name'] }}</button>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center">
                @foreach ($saleProjects as $item)
                    <div
                        class="col-lg-4 col-md-6 col-12 mb-4 @foreach ($item['fields']['category_slug'] as $categories) {{ $categories }} @endforeach all">
                        <div class="card neumorph-pop">
                            <div class="card-body">
                                <div class="image">
                                    <img src="{{ $item['fields']['thumbnail'][0]['thumbnails']['large']['url'] }}"
                                        alt="">
                                </div>
                                <h3>{{ $item['fields']['name'] }}</h3>
                                <p>
                                    @foreach ($item['fields']['category_name'] as $cate)
                                        {{ $cate }} {{ $loop->last ? '' : ', ' }}
                                    @endforeach
                                </p>
                                <a class="neumorph-pop" href="for-sale/{{ $item['fields']['slug'] }}" target="blank">
                                    Preview
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="team" class="container">
        <h2 class="section-title">Our Team</h2>
        <p class="section-sub-title">Closer With Us</p>
        <div class="row">
            @foreach ($team as $item)
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-4">
                    <div class="card neumorph-pop">
                        <div class="card-body card-team">
                            <div class="image">
                                <img src="{{ $item['fields']['photo'][0]['thumbnails']['large']['url'] }}"
                                    alt="">
                                <div class="overlay">{{ $item['fields']['role'] }}</div>
                            </div>
                            <h3>{{ $item['fields']['name'] }}</h3>
                            <div class="contact">
                                @if (isset($item['fields']['ct_linkedin']))
                                    <a class="button neumorph-pop" href="{{ $item['fields']['ct_linkedin'] }}"
                                        target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                @endif
                                @if (isset($item['fields']['ct_web']))
                                    <a class="button neumorph-pop" href="{{ $item['fields']['ct_web'] }}"
                                        target="_blank">
                                        <i class="fa-solid fa-globe"></i>
                                    </a>
                                @endif
                                @if (isset($item['fields']['ct_github']))
                                    <a class="button neumorph-pop" href="{{ $item['fields']['ct_github'] }}"
                                        target="_blank">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                @endif
                                @if (isset($item['fields']['ct_behance']))
                                    <a class="button neumorph-pop" href="{{ $item['fields']['ct_behance'] }}"
                                        target="_blank">
                                        <i class="fa-brands fa-behance"></i>
                                    </a>
                                @endif
                                @if (isset($item['fields']['ct_dribbble']))
                                    <a class="button neumorph-pop" href="{{ $item['fields']['ct_dribbble'] }}"
                                        target="_blank">
                                        <i class="fa-brands fa-dribbble"></i>
                                    </a>
                                @endif
                                @if (isset($item['fields']['ct_ig']))
                                    <a class="button neumorph-pop" href="{{ $item['fields']['ct_ig'] }}"
                                        target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                @endif

                                @if (isset($item['fields']['ct_email']))
                                    <a class="button neumorph-pop" href="mailto:{{ $item['fields']['ct_email'] }}"
                                        target="_blank">
                                        <i class="far fa-envelope"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section id="closing" class="container">
        <h2 class="section-title">Getting Closer To Us</h2>
        <p class="section-sub-title">
            We are always here to help you with your digital development needs
        </p>
        <form action="">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <input type="text" class="form-control neumorph-drop"
                            placeholder="Enter Personal/Company Name Here">
                        <div class="form-text">Whatever you want, either nickname or fullname</div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control neumorph-drop" placeholder="Enter Email">
                        <div class="form-text">Email active only</div>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control neumorph-drop" placeholder="Enter WhatsApp Number">
                        <div class="form-text">Might be for call or text</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <textarea class="neumorph-drop" rows="7" placeholder="Describe your needs!"></textarea>
                        <div class="form-text">Tell us your references</div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="">
                        <button class="button neumorph-pop" type="button" data-bs-toggle="modal"
                            data-bs-target="#not_ready">Submit</button>
                        <div class="modal fade" id="not_ready" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-submit">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <i class="fa-regular fa-face-tired"></i>
                                        <p>
                                            This form is not yet fully functional. <br> You can directly contact us!
                                        </p>
                                        <div class="contact">
                                            <a class="button neumorph-pop" href="https://wa.me/081311521443"
                                                target="blank">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a class="button neumorph-pop" href="mailto:tubagusflow@gmail.com"
                                                target="blank">
                                                <i class="far fa-envelope"></i>
                                            </a>
                                            <a class="button neumorph-pop" href="https://www.instagram.com/tebe19_/"
                                                target="blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button neumorph-pop"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row mt-5">
            <div class="col-md-4 mb-3">
                <a href="https://wa.me/081311521443" class="neumorph-pop">
                    <h3>
                        <i class="fab fa-whatsapp"></i>
                        081311521443
                    </h3>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="mailto:tubagusflow@gmail.com" class="neumorph-pop">
                    <h3>
                        <i class="far fa-envelope"></i>
                        tubagusflow@gmail.com
                    </h3>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="https://www.instagram.com/tebe19_/" class="neumorph-pop">
                    <h3>
                        <i class="fab fa-instagram"></i>
                        @tebe19_
                    </h3>
                </a>
            </div>
        </div>
    </section>
    <footer class="container neumorph-pop">
        Big Digital Development &copy; 2025
    </footer>
@endsection

@section('js')
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide', {
                autoScroll: {
                    speed: 2,
                },
                type: 'loop',
                arrows: false,
                pagination: false,
                // perPage: 3,
                autoWidth: true,
                gap: 30,
            });
            splide.mount(window.splide.Extensions);
        });
    </script>
    <script>
        $(".nav-icon").click(function() {
            $(".nav-menu").animate({
                width: "toggle"
            });
            $(this).toggleClass('neumorph-drop');
            $(this).toggleClass('neumorph-pop');
        });
    </script>
    <script>
        $(document).ready(function() {
            var intro_top = $("#intro").offset().top;
            var intro_bottom = intro_top + $("#intro").height();

            var who_top = $("#who").offset().top;
            var who_bottom = who_top + $("#who").height();

            var porto_top = $("#portfolio").offset().top;
            var porto_bottom = porto_top + $("#portfolio").height();

            var benefit_top = $("#benefit").offset().top;
            var benefit_bottom = benefit_top + $("#benefit").height();

            var sale_top = $("#sale").offset().top;
            var sale_bottom = sale_top + $("#sale").height();

            var team_top = $("#team").offset().top;
            var team_bottom = team_top + $("#team").height();

            console.log();
            $(window).scroll(function() {
                var screen_pos = $(window).scrollTop() + Math.floor($(window).height() / 2);
                $('#nav-intro').toggleClass("neumorph-drop", (screen_pos >= intro_top && screen_pos <=
                    who_bottom));
                $('#nav-portfolio').toggleClass("neumorph-drop", (screen_pos >= porto_top && screen_pos <=
                    porto_bottom));
                $('#nav-benefit').toggleClass("neumorph-drop", (screen_pos >= benefit_top && screen_pos <=
                    benefit_bottom));
                $('#nav-sale').toggleClass("neumorph-drop", (screen_pos >= sale_top && screen_pos <=
                    sale_bottom));
                $('#nav-team').toggleClass("neumorph-drop", (screen_pos >= team_top && screen_pos <=
                    team_bottom));
            });
        });
    </script>
@endsection
