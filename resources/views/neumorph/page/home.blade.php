@extends('neumorph.layout.main')

@section('content')
    {{-- <section class="container" id="testing" style="height: 100vh; position: relative; background-color:white">

    </section> --}}
    <section class="container full-page" id="intro">
        <div class="card">
            <div class="card-body">
                <div class="bag">
                    <h1>Big Digital Development</h1>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($categoriesexpProject as $item)
                                <div class="carousel-item {{ $loop->first ? 'active' : ' ' }}">
                                    {{ $item['fields']['name'] }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="icons">
                        <div>
                            <a href="https://www.instagram.com/tebe19_/" target="blank_">
                                <div class="card card-morph-pop">
                                    <div class="card-body">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>

                        </div>
                        <div>

                        </div>
                        <a href="https://wa.me/6281311521443" target="blank_">
                            <div class="card card-morph-pop">
                                <div class="card-body">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                        <a href="mailto:tubagusflow@gmail.com">
                            <div class="card card-morph-pop">
                                <div class="card-body">
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div><b><i>(Some of Sections Are Under Maintenance)</i></b></div>
                </div>
            </div>
        </div>
    </section>

    <section class="container full-page" id="who">
        <div class="wrapper">
            <h1 class="section-title">Who We Are</h1>
            <div class="row bagger" style="">
                <div class="col-lg-3 second-phone" style="">
                    <div class="row" style="">
                        <div class="col-lg-12" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Business Analyst</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-lightbulb"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    The one who translate your business proccess from the first proccess to the end of the
                                    proccess into a very cool system
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>UI/UX Designer</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-palette"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Describer all of your website fantasies to become somethings that you can see with your
                                    eyes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 picture first-phone">
                    <div class="outer card-morph-drop" style="">
                        <div class="inner card-morph-pop" style="">
                            <img src="{{ asset('assets/img/logo/tab-icon.png') }}" alt=""
                                style="border-radius: 0px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 third-phone" style="">
                    <div class="row" style="">
                        <div class="col-lg-12" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Mobile & Web Developer</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fa-solid fa-code"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Your technical design translator from Figma, Photoshop, or any web design tools into a
                                    real website
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Project Manager</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-tasks"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Keeping the timeline always inline within the expectation, and makes everyone happy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container" id="team">

    </section>

    <section class="container" id="proj-live">
        <h1 class="section-title">We Are Part of These</h1>
        <div uk-filter="target: .js-filter">

            <div class="uk-subnav uk-subnav-pill">
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <button class="uk-active card-morph-pop" uk-filter-control=".all">All Project</button>
                    </div>
                    @foreach ($categoriesexpProject as $item)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                            <button class="card-morph-pop"
                                uk-filter-control=".{{ $item['fields']['slug'] }}">{{ $item['fields']['name'] }}
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center">
                @foreach ($filteredexpProject as $item)
                    <div
                        class="col-lg-4 col-md-6 col-12 mb-4 @foreach ($item['fields']['category_slug'] as $categories) {{ $categories }} @endforeach all">
                        <div class="card card-morph-pop">
                            <div class="card-body text-center">
                                <div class="proj-image" type="button" data-bs-toggle="modal"
                                    data-bs-target="#{{ $item['id'] }}">
                                    <img src="{{ $item['fields']['screenshots'][0]['url'] }}" alt="">
                                </div>
                                <h4>
                                    {{ $item['fields']['name'] }}
                                </h4>
                                <h5>
                                    @foreach ($item['fields']['category_name'] as $cate)
                                        {{ $cate }} {{ $loop->last ? '' : ', ' }}
                                    @endforeach
                                </h5>
                                <div class="modal fade" id="{{ $item['id'] }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            {{-- <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div> --}}
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
            </div>
        </div>
    </section>

    <section class="container" id="benefit">
        <div class="wrapper">
            <h1 class="section-title">What You Might Get</h1>
            <div class="row">
                @foreach ($benefit as $item)
                    <div class="col-lg-4">
                        <div class="card-morph-drop">
                            <div class="card-morph-drop">
                                <div class="card-what">
                                    <div class="bag">
                                        <h4>{{ $item['fields']['name'] }}</h4>
                                        <div class="card card-morph-pop">
                                            <div class="card-body">
                                                {!! $item['fields']['icon'] !!}
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        {{ $item['fields']['description'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container" id="proj-sale">
        <h1 class="section-title">Ready to Use</h1>
        <div uk-filter="target: .js-filter">

            <div class="uk-subnav uk-subnav-pill">
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <button class="uk-active card-morph-pop" uk-filter-control=".all">All Project</button>
                    </div>
                    @foreach ($categoriessaleProject as $item)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                            <button class="card-morph-pop"
                                uk-filter-control=".{{ $item['fields']['slug'] }}">{{ $item['fields']['name'] }}
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center">
                @foreach ($saleProjects as $item)
                    <div
                        class="col-lg-4 col-md-6 col-12 mb-4 @foreach ($item['fields']['category_slug'] as $categories) {{ $categories }} @endforeach all">
                        <div class="card card-morph-pop">
                            <div class="card-body text-center">
                                <div class="proj-image" type="button" data-bs-toggle="modal"
                                    data-bs-target="#{{ $item['id'] }}">
                                    <img src="{{ $item['fields']['thumbnail'][0]['url'] }}" alt="">
                                </div>
                                <h4>
                                    {{ $item['fields']['name'] }}
                                </h4>
                                <h5>
                                    @foreach ($item['fields']['category_name'] as $cate)
                                        {{ $cate }} {{ $loop->last ? '' : ', ' }}
                                    @endforeach
                                </h5>
                                <a href="{{ $item['fields']['link_preview'] }}" target="blank_">
                                    <div class="button-morph-pop">
                                        Preview
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <section class="container " id="pricing">
        <div class="wrapper">
            <h1 class="section-title">Custome Website</h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-morph-pop" style="">
                        <div class="card-header text-center">
                            <h5>Company Profile</h5>
                            <div class="bag-currency" style="">
                                <p class="dollar">
                                    Start from $11
                                </p>
                                <p class="rp" style="">
                                    Mulai dari Rp 150k
                                </p>
                                <button class="button-morph-pop mt-2" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-html="true"
                                    title="
                            <ul>
                                <li>
                                    Company Profile
                                </li>
                                <li>
                                    Organization Profile
                                </li>
                                <li>
                                    School Profile
                                </li>
                                <li>
                                    Personal Branding
                                </li>
                                <li>
                                    <i>ETC</i>
                                </li>
                            </ul>
                            ">
                                    Purposes
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    Front Cover
                                </li>
                                <li>
                                    Introduction Information
                                </li>
                                <li>
                                    Company History
                                </li>
                                <li>
                                    Vision and Mission
                                </li>
                                <li>
                                    Company's Strength
                                </li>
                                <li>
                                    Best Services
                                </li>
                                <li>
                                    Testimonial
                                </li>
                                <li>
                                    Gallery
                                </li>
                                <li>
                                    Additional Information
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="button-morph-pop" data-bs-toggle="modal"
                                data-bs-target="#com-prof">
                                Custom Build!
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-morph-pop" style="">
                        <div class="card-header text-center">
                            <h5>Online Store Management</h5>
                            <div class="bag-currency" style="">
                                <p class="dollar">
                                    Start from $35
                                </p>
                                <p class="rp" style="">
                                    Mulai dari Rp 500k
                                </p>
                                <button class="button-morph-pop mt-2" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-html="true"
                                    title="
                            <ul>
                                <li>
                                    Retail
                                </li>
                                <li>
                                    Cloth Store
                                </li>
                                <li>
                                    Cake and Cookies Store
                                </li>
                                <li>
                                    Travel Agent
                                </li>
                                <li>
                                    Food Store
                                </li>
                                <li>
                                    Home Service
                                </li>
                                <li>
                                    <i>ETC</i>
                                </li>
                            </ul>
                            ">
                                    Purposes
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    Online Payment
                                </li>
                                <li>
                                    Invoice
                                </li>
                                <li>
                                    Marketing
                                </li>
                                <li>
                                    Inventory Management
                                </li>
                                <li>
                                    Customer Management
                                </li>
                                <li>
                                    Finance Management
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="button-morph-pop" data-bs-toggle="modal"
                                data-bs-target="#mod-com">
                                Custom Build!
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-morph-pop" style="">
                        <div class="card-header text-center">
                            <h5>Online Course</h5>
                            <div class="bag-currency" style="">
                                <p class="dollar">
                                    Start from $xx
                                </p>
                                <p class="rp" style="">
                                    Mulai dari Rp xxxk
                                </p>
                                <button class="button-morph-pop mt-2" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-html="true"
                                    title="
                            <ul>
                                <li>
                                    New Student Admission
                                </li>
                                <li>
                                    Goverment Test
                                </li>
                                <li>
                                    School Online Exam
                                </li>
                                <li>
                                    Company Employee Test
                                </li>
                                <li>
                                    <i>ETC</i>
                                </li>
                            </ul>
                            ">
                                    Purposes
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    Video training course
                                </li>
                                <li>
                                    Audio training course
                                </li>
                                <li>
                                    Text training course
                                </li>
                                <li>
                                    Multiple choice test
                                </li>
                                <li>
                                    Scheduling system
                                </li>
                                <li>
                                    Certification system
                                </li>
                                <li>
                                    Exam question and answer management
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="https://wa.me/6281311521443" target="blank_">
                                <div class="button-morph-pop">
                                    <b>Build Now!</b>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="container full-page" id="form">
        <div class="wrapper">
            <h1 class="section-title">Getting Closer to Us</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="form-group">
                            <input type="text" class="card-morph-drop" name="vis_name" placeholder="Enter name here"
                                required>
                            <small class="form-text text-muted">Whatever you want, either nickname or fullname</small>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="form-group">
                            <input type="email" name="vis_email" class="card-morph-drop" placeholder="Enter email"
                                required>
                            <small class="form-text text-muted">Email active only</small>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="form-group">
                            <input type="number" class="card-morph-drop" name="vis_wa"
                                placeholder="Enter WhatsApp Number" required>
                            <small class="form-text text-muted">Might be for call or text</small>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group ">
                                    <select class="card-morph-drop" name="vis_needs" aria-placeholder="test" required>
                                        <option style="display: none;">Choose your needs</option>
                                        <option>Build Website</option>
                                        <option>Offering Letter</option>
                                        <option>Ask about life</option>
                                        <option>Something else</option>
                                    </select>
                                    <small class="form-text text-muted">Choose wisely, or for fun, thats okey.</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="card-morph-drop" name="vis_ref"
                                        placeholder="Drop link here" required>
                                    <small class="form-text text-muted">Website, spotify music, or youtube video
                                        url</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <textarea class="card-morph-drop" rows="6" name="vis_msg" placeholder="Make it detail and to the point"
                                required></textarea>
                            <small class="form-text text-muted">Might be about webs reference, music taste, or budget and
                                money</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="card-morph-pop">Submit</button>
                    </div>
                </div>
            </form>
        </div>


        @include('neumorph.page.modal')

    </section>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            var intro = $("#intro").offset().top;
            var who = $("#who").offset().top;
            var proj = $("#proj-live").offset().top;
            var benefit = $("#benefit").offset().top;
            var proj_sale = $("#proj-sale").offset().top;
            var form = $("#form").offset().top;
            console.log();
            $(window).scroll(function() {
                var screen_pos = $(window).scrollTop() + Math.floor($(window).height() / 2);
                $('#nav-intro').toggleClass("button-morph-drop", (screen_pos >= intro && screen_pos < who));
                $('#nav-who').toggleClass("button-morph-drop", (screen_pos >= who && screen_pos < proj));
                $('#nav-proj-live').toggleClass("button-morph-drop", (screen_pos >= proj && screen_pos <
                    benefit));
                $('#nav-benefit').toggleClass("button-morph-drop", (screen_pos >= benefit && screen_pos <
                    proj_sale));
                $('#nav-proj-sale').toggleClass("button-morph-drop", (screen_pos >= proj_sale &&
                    screen_pos < form));
                $('#nav-form').toggleClass("button-morph-drop", (screen_pos >= form));
            });
        });
    </script>

    <!-- Step 1: Pass PHP data to JavaScript -->
    {{-- <script>
        const images = @json($tools)
    </script> --}}
    <!-- Step 2: Use the data in JavaScript -->
    {{-- <script>
        images.forEach(function(item) {
            const imageUrl = item.fields.icon[0].url;
            const size = Math.floor(Math.random() * (50 - 30 + 1)) + 30;
            const top = Math.floor(Math.random() * (90 - 10 + 1)) + 10;
            const left = Math.floor(Math.random() * (90 - 10 + 1)) + 10;
            const img = $('<img>').attr('src', imageUrl).css({
                position: 'absolute',
                height: size + 'px',
                width: size + 'px',
                top: top + '%',
                left: left + '%',
                aspectRatio: '1 / 1',
            });

            $('#intro').append(img);
        });
    </script> --}}
@endsection
