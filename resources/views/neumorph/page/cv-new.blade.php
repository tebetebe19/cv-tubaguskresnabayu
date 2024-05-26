@extends('neumorph.layout.main')

@section('content')
    <section class="container full-page" id="intro">
        <div class="card">
            <div class="card-body">
                <div class="bag">
                    <h1>Tubagus Kresna Bayu</h1>
                    <h5>13 October 1996</h5>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                Business Analyst
                            </div>
                            <div class="carousel-item">
                                UI/UX Designer
                            </div>
                            <div class="carousel-item">
                                Front End Engineer
                            </div>
                            <div class="carousel-item">
                                Father
                            </div>
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
            <h1 class="section-title">Who Am I</h1>
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
                                    The one who will translate your business proccess, from the first proccess to the end
                                    into a very cool system
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
                            <img src="{{ asset('assets/img/logo/5x5.png') }}" alt="" style="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 third-phone" style="">
                    <div class="row" style="">
                        <div class="col-lg-12" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Front End Engineer</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-random"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Your website design translator from Figma, Photoshop, or any web design tools into a
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

    <section class="container" id="exp2">
        <h1 class="section-title">Experiences</h1>

        @foreach ($exp as $exp)
            <div class="row list" style="margin-top: -10px">
                <div class="col-1 list-line" style="">
                    <div class="line-shadow" style="">
                        <div class="bag" style="position: relative">
                            <div class="v-line card-morph-pop" style=""></div>
                            <div class="h-line card-morph-pop" style=""></div>
                        </div>
                    </div>
                    <div class="round-shadow card-morph-pop" style=""></div>
                    <div class="line-shadow" style="position: absolute; z-index: 1;">
                        <div class="bag" style="position: relative">
                            <div class="v-line card-morph-pop" style="box-shadow: none ;background: #172030;"></div>
                            <div class="h-line card-morph-pop"
                                style="box-shadow: none; width: 80px; background: #172030;"></div>
                        </div>
                    </div>
                    <div class="round-shadow hover" style="">
                        <div class="card-morph-drop round cssanimation fadeOut infinite" style=""></div>
                    </div>
                </div>
                <div class="col-11 info" style="">
                    <div class="card card-morph-pop">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="mb-2">{{ $exp['fields']['companyName'] }}</h4>
                                    <h5 class="mb-2">{{ $exp['fields']['position'] }}</h5>
                                    <p class="mb-4">{{ $exp['fields']['dateStart'] }} - {{ $exp['fields']['dateEnd'] }}
                                    </p>
                                </div>
                                <div class="col-lg-8" style="line-height: 2;">
                                    <p>{!! $exp['fields']['description'] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    {{-- <section class="container" id="proj">
    <h1 class="section-title">Live Projects</h1>
    <div class="row">
        @foreach ($proj->reverse() as $proj)
        <div class="col-12 col-lg-4 mb-4">
            <div class="card card-morph-pop">
                <div class="card-body text-center">
                    <div class="proj-image">
                        <img src="{{asset('../assets/img/thumbnail/'.$proj->thumbnail)}}" alt="">
                    </div>
                    <h4>
                        {{$proj->judul}}
                    </h4>
                    <h5>
                        {!!$proj->deskripsi!!}
                    </h5>

                    <div class="row proj-button">
                        <div class="col-6">
                            <a href="{{$proj->link_asli}}" target="blank_">
                                <div class="card card-morph-pop">
                                    <div class="card-body">
                                        Live Web
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="{{$proj->link_local}}" target="blank_">
                                <div class="card card-morph-pop">
                                    <div class="card-body">
                                        Local Preview
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section> --}}

    {{-- <section class="container proj-forsale" id="proj">
    <h1 class="section-title">Free Time Projects</h1>

    <div uk-filter="target: .js-filter">

        <div class="uk-subnav uk-subnav-pill">
            <div class="row justify-content-around">
                <div class="col-lg-2 col-6">
                    <button class="uk-active card-morph-pop" uk-filter-control=".all">All Web</button>
                </div>
                @foreach ($kate->unique('kategori') as $item)
                <div class="col-lg-2 col-6">
                    <button class="card-morph-pop" uk-filter-control=".{{$item->kategori}}">{{$item->kategori}}</button>
                </div>
                @endforeach
            </div>
        </div>

        <div class="row js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center">
            @foreach ($sale as $proj)
            <div class="col-6 col-lg-4 mb-4 {{$proj->kategori}} all">
                <div class="card card-morph-pop">
                    <div class="card-body text-center">
                        <div class="proj-image">
                            <img src="{{asset('../assets/img/forsale/'.$proj->thumbnail)}}" alt="" style="width: 100%">
                        </div>
                        <h4 class="mb-3">
                            {{$proj->judul}}
                        </h4>
    
                        <div class="row justify-content-center proj-button">
                            <div class="col-lg-6 col-12">
                                <a href="{{$proj->link_asli}}" target="blank_">
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            Live Preview
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section> --}}

    {{-- <section class="container" id="skill">
    <h1 class="section-title">Skills</h1>
    <div class="row">
        @foreach ($skill as $item)
        <div class="col-lg-6">
            <div>
                <h4>{{$item->skill}} - {{$item->tingkatan}}</h4>
                <h5>{{$item->persen}}%</h5>
            </div>
            <div class="progress card-morph-drop">
                <div class="progress-value" style="width: {{$item->persen}}%"></div>
            </div>
        </div>
        @endforeach
    </div>
</section> --}}

    <section class="container full-page" id="edu">
        <div class="wrapper">
            <h1 class="section-title">Education</h1>
            <div class="row justify-content-center text-center">
                <div class="col-12 mb-5">
                    <h4>Faculty of Computer Science and Information Technology Gunadarma University <br> (Information
                        Systems Department)</h4>
                    <h5>Nov 2015 - Dec 2019</h5>
                    <h4>GPA 3.28/4.00</h4>
                </div>
                <div class="col-lg-6 mb-5">
                    <h4>First Thesis (2018)</h4>
                    <h5>CREATING DECISION MAKING APPLICATION THROUGH THE FIGHTER COLLEGE GAME USING RPG MAKER MV</h5>
                </div>
                <div class="col-lg-6 mb-5">
                    <h4>Second Thesis (2019)</h4>
                    <h5>CREATING GAME APPLICATION WITH ROLE PLAYING GAME GENRE USING RPG MAKER MV</h5>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="container full-page" id="form">
        <div class="wrapper">
            <h1 class="section-title">Getting Closer to Me</h1>
            <form action="{{ route('website.store') }}" method="POST" enctype="multipart/form-data">
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

    </section> --}}
@endsection

@section('js')
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    <script>
        $(document).ready(function() {
            var intro = $("#intro").offset().top;
            var who = $("#who").offset().top;
            var exp2 = $("#exp2").offset().top;
            // var proj = $("#proj").offset().top;
            // var skill = $("#skill").offset().top;
            var edu = $("#edu").offset().top;
            // var form = $("#form").offset().top;

            $(window).scroll(function() {
                console.log(window);
                var screen_pos = $(window).scrollTop() + Math.floor($(window).height() / 2);
                // $('#nav-intro').toggleClass("button-morph-drop", (screen_pos >= intro && screen_pos < who));
                // $('#nav-who').toggleClass("button-morph-drop", (screen_pos >= who && screen_pos < exp2));
                // $('#nav-exp2').toggleClass("button-morph-drop", (screen_pos >= exp2 && screen_pos < proj));
                // $('#nav-projj').toggleClass("button-morph-drop", (screen_pos >= proj && screen_pos <
                // skill));
                // $('#nav-skill').toggleClass("button-morph-drop", (screen_pos >= skill && screen_pos < edu));
                // $('#nav-edu').toggleClass("button-morph-drop", (screen_pos >= edu && screen_pos < form));
                // $('#nav-form').toggleClass("button-morph-drop", (screen_pos >= form));

                $('#nav-intro').toggleClass("button-morph-drop", (screen_pos >= intro && screen_pos < who));
                $('#nav-who').toggleClass("button-morph-drop", (screen_pos >= who && screen_pos < exp2));
                $('#nav-exp2').toggleClass("button-morph-drop", (screen_pos >= exp2 && screen_pos < edu));
                $('#nav-edu').toggleClass("button-morph-drop", (screen_pos >= edu));
            });
        });
    </script>
@endsection
