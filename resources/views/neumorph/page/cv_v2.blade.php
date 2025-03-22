@extends('neumorph.layout.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/style-new.css') }}?v={{ env('CSS_VERSION') }}">
@endsection

@section('content')
    @include('neumorph.layout.navbar_v2')
    <section id="intro" class="">
        <div class="bag">
            <h1>Tubagus Kresna Bayu</h1>
            <p>13 October 1996</p>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        Project Manager
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        Business Analyst
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        Website Developer
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        Father
                    </div>
                </div>
            </div>
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
                <ul id="splide__list" class="splide__list">
                    <li class="splide__slide">
                        Loading
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="who" class="container">
        <h2 class="section-title">Who Am I</h2>
        <p class="section-sub-title">Simple and Strategic Person</p>
        <div class="bag">
            <div class="row">
                <div class="col-lg-4 col-md-6 wrapper sec-one">
                    <div class="item">
                        <h3><span class="neumorph-pop"><i class="fas fa-tasks"></i></span> Project Manager</h3>
                        <p>Keeping the timeline always inline within the expectation, and makes everyone happy</p>
                    </div>
                    <div class="item">
                        <h3><span class="neumorph-pop"><i class="fas fa-lightbulb"></i></span> Business Analsyst</h3>
                        <p>The one who will translate your business into a very cool digital system</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sec-two">
                    <div class="item">
                        <div class="image">
                            <div class="neumorph-drop">
                                <div class="neumorph-pop">
                                    <img src="{{ asset('assets/img/logo/5x5.png') }}" alt="Big Digital Development"
                                        style="border-radius: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wrapper sec-three">
                    <div class="item">
                        <h3><span class="neumorph-pop"><i class="fa-solid fa-code"></i></span> Website Developer
                        </h3>
                        <p>Your technical design translator from any design tools into a real website</p>
                    </div>
                    <div class="item">
                        <h3><span class="neumorph-pop"><i class="fa-solid fa-person-breastfeeding"></i></span> Father</h3>
                        <p>Trying to be a hero to my little cutie pie for the rest of her life</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="exp" class="container">
        <h2 class="section-title">Experiences</h2>
        <p class="section-sub-title">Managing and Develop Project</p>
        <div id="loading-exp" class="loading all">Loading... <br> Waiting for Experiences</div>
    </section>

    <section id="portfolio" class="container">
        <h2 class="section-title">Portofolio</h2>
        <p class="section-sub-title">Completed Chalenges</p>
        <div uk-filter="target: .js-filter">
            <div class="uk-subnav uk-subnav-pill mb-4">
                <div id="categoriesexpProject" class="row justify-content-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                        <button class="uk-active neumorph-pop" uk-filter-control=".all">All Project</button>
                    </div>
                </div>
            </div>
            <div id="expProject" class="row js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center">
                <div class="loading all">Loading... <br> Wait For Our Greatest Projects!</div>
            </div>
        </div>
    </section>

    <section id="education" class="container">
        <div class="wrapper">
            <h2 class="section-title">Education</h2>
            <p class="section-sub-title">Where It Started</p>
            <div class="row justify-content-center text-center data">
                <div class="col-12 mb-5">
                    <h3>Faculty of Computer Science and Information Technology Gunadarma University <br> (Information
                        Systems Department)</h3>
                    <p>Nov 2015 - Dec 2019</p>
                    <p style="font-size: larger; font-weight: bolder"> <i>GPA 3.28/4.00</i> </p>
                </div>
                <div class="col-lg-6 mb-5">
                    <h3>First Thesis (2018)</h3>
                    <h4>CREATING DECISION MAKING APPLICATION THROUGH THE FIGHTER COLLEGE GAME USING RPG MAKER MV</h4>
                </div>
                <div class="col-lg-6 mb-5">
                    <h3>Second Thesis (2019)</h3>
                    <h4>CREATING GAME APPLICATION WITH ROLE PLAYING GAME GENRE USING RPG MAKER MV</h4>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    {{-- Function Calculate --}}
    <script>
        function Calculate() {
            var intro_top = $("#intro").offset().top;
            var intro_bottom = intro_top + $("#intro").height();

            var who_top = $("#who").offset().top;
            var who_bottom = who_top + $("#who").height();

            var exp_top = $("#exp").offset().top;
            var exp_bottom = exp_top + $("#exp").height();

            var portfolio_top = $("#portfolio").offset().top;
            var portfolio_bottom = portfolio_top + $("#portfolio").height();

            var education_top = $("#education").offset().top;
            var education_bottom = education_top + $("#education").height();

            $(window).scroll(function() {
                var screen_pos = $(window).scrollTop() + Math.floor($(window).height() / 2);
                $('#nav-intro').toggleClass("neumorph-drop", (screen_pos >= intro_top && screen_pos <=
                    intro_bottom));
                $('#nav-who').toggleClass("neumorph-drop", (screen_pos >= who_top && screen_pos <= who_bottom));
                $('#nav-exp').toggleClass("neumorph-drop", (screen_pos >= exp_top && screen_pos <=
                    exp_bottom));
                $('#nav-portfolio').toggleClass("neumorph-drop", (screen_pos >= portfolio_top && screen_pos <=
                    portfolio_bottom));
                $('#nav-education').toggleClass("neumorph-drop", (screen_pos >= education_top));
            });
        }
    </script>
    <script>
        // Ajax client
        $.ajax({
            url: '/data/client',
            method: 'GET',
            success: function(response) {
                // Kosongkan elemen team-list
                $('#splide__list').empty();

                // Loop melalui data dan tambahkan ke UI
                response.forEach(function(clients) {
                    $('#splide__list').append(`
                            <li class="splide__slide">
                                <img src="${clients.fields.image[0].thumbnails.large.url }" alt="PediaSure">
                            </li>
                        `);
                });
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
                Calculate();
            },
            error: function(xhr, status, error) {
                // Tampilkan pesan error jika request gagal
                $('#splide__list').html('Failed to load client data.');
            }
        });
        // Ajax Experiences
        $.ajax({
            url: '/data/experiences',
            method: 'GET',
            success: function(response) {
                // Kosongkan elemen team-list
                $('#loading-exp').remove();

                // Loop melalui data dan tambahkan ke UI
                response.forEach(function(item) {
                    $('#exp').append(`
                        <div class="row list">
                            <div class="col-1 list-line">
                                <div class="line-shadow">
                                    <div class="bag" style="position: relative">
                                        <div class="v-line neumorph-pop"></div>
                                        <div class="h-line neumorph-pop"></div>
                                    </div>
                                </div>
                                <div class="round-shadow neumorph-pop"></div>
                                <div class="line-shadow" style="position: absolute; z-index: 1;">
                                    <div class="bag" style="position: relative">
                                        <div class="v-line neumorph-pop" style="box-shadow: none ;background: #172030;"></div>
                                        <div class="h-line neumorph-pop" style="box-shadow: none; width: 80px; background: #172030;">
                                        </div>
                                    </div>
                                </div>
                                <div class="round-shadow hover">
                                    <div class="neumorph-drop round cssanimation fadeOut infinite"></div>
                                </div>
                            </div>
                            <div class="col-11 info">
                                <div class="card neumorph-pop">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <h3 class="mb-2">${item.fields.companyName}</h3>
                                                <h4 class="mb-2">${item.fields.position}</h4>
                                                <p class="mb-4">${item.fields.dateStart} - ${item.fields.dateEnd}</p>
                                            </div>
                                            <div class="col-lg-8" style="line-height: 1.75;">
                                                ${item.fields.description}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                });
                Calculate();

            },
            error: function(xhr, status, error) {
                console.error('Failed to load experience projects:', error);
                $('#benefits').html('Failed to load experience projects.');
            }
        });

        // Ajax Exp Project
        $.ajax({
            url: '/data/expProjects',
            method: 'GET',
            success: function(response) {
                // Kosongkan elemen team-list
                $('#expProject').empty();

                // Loop melalui data dan tambahkan ke UI
                response.forEach(function(item) {
                    let categoriesSlug = item.fields.category_slug.join(' ');
                    let categoriesName = item.fields.category_name.join(', ');
                    let carouselItems = item.fields.screenshots.map((img, index) => `
                            <div class="carousel-item ${index === 0 ? 'active' : ''}">
                                <div class="box">
                                    <img src="${img.url}" class="mx-auto my-auto d-block">
                                </div>
                            </div>
                        `).join('');
                    $('#expProject').append(`
                            <div class="col-lg-4 col-md-6 mb-4 ${categoriesSlug} all">
                                <div class="card neumorph-pop">
                                    <div class="card-body">
                                        <div class="image" type="button" data-bs-toggle="modal"
                                            data-bs-target="#${item.id}">
                                            <img src="${item.fields.screenshots[0].thumbnails.large.url}"
                                                alt="">
                                        </div>
                                        <h3>${item.fields.name}</h3>
                                        <p>${categoriesName}</p>
                                        <div class="modal fade" id="${item.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-fullscreen">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        <div id="carousel${item.id}" class="carousel slide" data-bs-ride="carousel">
                                                            <div class="carousel-inner" data-bs-dismiss="modal">
                                                                ${carouselItems}
                                                            </div>
                                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel${item.id}" data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </button>
                                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel${item.id}" data-bs-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                        `);
                });
                let test = response.map(function(item) {
                    return item.fields.category_slug.join(' ');
                }).join(' ');
                $('#expProject').append(`
                            <div class="col-lg-4 col-md-6 ${test} all">
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
                        `);
                Calculate();
            },
            error: function(xhr, status, error) {
                console.error('Failed to load experience projects:', error);
                $('#expProject').html('Failed to load experience projects.');
            }
        });

        // Ajax Categories
        $.ajax({
            url: '/data/categories', // Sesuaikan dengan route Anda
            method: 'GET',
            success: function(response) {
                // Handle data untuk section #categoriesexpProject
                response.categoriesexpProject.forEach(function(category) {
                    $('#categoriesexpProject').append(`
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                                <button class="neumorph-pop" uk-filter-control=".${category.fields.slug}">${category.fields.name}</button>
                            </div>
                        `);
                });

                Calculate();
            },
            error: function(xhr, status, error) {
                console.error('Failed to load categories data:', error);
                $('#categoriesexpProject').html('Failed to load experience categories.');
            }
        });
    </script>
@endsection
