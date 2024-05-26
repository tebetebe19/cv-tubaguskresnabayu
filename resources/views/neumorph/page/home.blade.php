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
                            <a href="https://www.instagram.com/b19_design/" target="blank_">
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
                                    {{-- <i class="far fa-envelope"></i> --}}
                                    <img src="{{ asset('assets/gif/idea.gif') }}" alt="" style="width: 100%">
                                </div>
                            </div>
                        </a>
                    </div>
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
                                    <h4>Father</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-baby-carriage"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    She is cute, and the only reason why iam still here <i class="fas fa-baby"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="container proj-forsale" id="proj">
    <h1 class="section-title">For Sale Webs</h1>

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
                        <h5>
                            $ {{$proj->harga_dollar}} / Rp {{$proj->harga_rp}}
                        </h5>
    
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

    <section class="container" id="what">
        <div class="wrapper">
            <h1 class="section-title">What You Might Get</h1>
            <div class="row">
                <div class="col-lg-4" style="">
                    <div class="card-morph-drop" style="">
                        <div class="card-morph-drop" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Cheap</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-hand-holding-usd"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Prove me that you're a new comer, and lets talk about your new affordable website
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="">
                    <div class="card-morph-drop" style="">
                        <div class="card-morph-drop" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Professional Email</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-file-signature"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Will be more cool if you have your 'yourname@yourweb.com' email isn't it?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="">
                    <div class="card-morph-drop" style="">
                        <div class="card-morph-drop" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>All Yours</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-truck-loading"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    All of the source code will be yours, so you can tweaks your own website
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="">
                    <div class="card-morph-drop" style="">
                        <div class="card-morph-drop" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Licensed Website</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-file-signature"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Yes, licensed. Just to make sure your website is officially yours
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="">
                    <div class="card-morph-drop" style="">
                        <div class="card-morph-drop" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Responsive Webs</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-code"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    All in one. For desktop, smartphone, tabs, and maybe your 75" TV, are in packs
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="">
                    <div class="card-morph-drop" style="">
                        <div class="card-morph-drop" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Consultation</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-hands-helping"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Just talk to me about your website idea, and lets discuss about it before we make it
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="">
                    <div class="card-morph-drop" style="">
                        <div class="card-morph-drop" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Free Domain & Server</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-globe"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    As long as this website still active, your first year website's domain and server still
                                    free
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="">
                    <div class="card-morph-drop" style="">
                        <div class="card-morph-drop" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Mockup and Prototype Design</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-object-ungroup"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    We can start from the scratch, and this scratch will be yours
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="">
                    <div class="card-morph-drop" style="">
                        <div class="card-morph-drop" style="">
                            <div class="card-what">
                                <div class="bag">
                                    <h4>Huge Database</h4>
                                    <div class="card card-morph-pop">
                                        <div class="card-body">
                                            <i class="fas fa-warehouse"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    It's really really huge. But remember, its just huge, not unlimited
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container " id="pricing">
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
            var proj = $("#proj").offset().top;
            var what = $("#what").offset().top;
            var pricing = $("#pricing").offset().top;
            var form = $("#form").offset().top;
            console.log();
            $(window).scroll(function() {
                var screen_pos = $(window).scrollTop() + Math.floor($(window).height() / 2);
                $('#nav-intro').toggleClass("button-morph-drop", (screen_pos >= intro && screen_pos < who));
                $('#nav-who').toggleClass("button-morph-drop", (screen_pos >= who && screen_pos < proj));
                $('#nav-proj').toggleClass("button-morph-drop", (screen_pos >= proj && screen_pos < what));
                $('#nav-what').toggleClass("button-morph-drop", (screen_pos >= what && screen_pos <
                    pricing));
                $('#nav-pricing').toggleClass("button-morph-drop", (screen_pos >= pricing && screen_pos <
                    form));
                $('#nav-form').toggleClass("button-morph-drop", (screen_pos >= form));
            });
        });
    </script>
@endsection
