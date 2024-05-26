<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css" />

    <!-- UIkit CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/css/uikit.min.css" /> --}}

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit-icons.min.js"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Splide CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/splide.min.css') }}">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/cssanimation.min.css') }}">

    <title>Tubagus Kresna Bayu</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/tab-icon.png') }}">
</head>

<body>

    @include('neumorph.layout.topbar')

    @yield('content')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <!-- JS Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>
        $(document).ready(function() {

            $('#nav-burger').click(function() {
                $(this).toggleClass('open');
                $(".navbar-bag").togle("slow");
            });

            $(".slide-toggle").click(function() {
                $(".text-mamen").animate({
                    width: "toggle"
                });

            });

            $(".slide-toggle").click(function() {
                $("#muter").toggleClass("rotate", 1500);
            });

        });
    </script>

    <script>
        $('#owl-gallery').owlCarousel({
            loop: true,
            margin: 40,
            dotsEach: true,
            autoplay: true,
            autoplayTimeout: 2000,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>

    {{-- Compro start --}}
    <script>
        var harga = 0;
        var price = 0;
        var time = 0;

        function addListCompro(hrg, prc, tim) {
            harga = harga + hrg;
            price = price + prc;
            time = time + tim;
        }

        function decListCompro(hrg, prc, tim) {
            harga = harga - hrg;
            price = price - prc;
            time = time - tim;
        }

        function showHargaCompro() {
            let hargaidr = harga.toLocaleString({
                style: "currency",
                currency: "IDR"
            });
            let priceusd = price.toLocaleString({
                style: "currency",
                currency: "USD"
            });
            $('.harga-compro').html(hargaidr);
            $('.price-compro').html(priceusd);
            $('.time-compro').html(time);
        }

        $('#com_prof-front-1').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
            } else {
                decListCompro(hrg, prc, tim);
                if ($("#com_prof-front-2").prop("checked")) {
                    decListCompro(hrg, prc, tim)
                    $('#com_prof-front-2').prop('checked', false);
                }
            }
            showHargaCompro();
        })

        $('#com_prof-front-2').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
                if ($("#com_prof-front-1").prop("checked") == false) {
                    addListCompro(hrg, prc, tim)
                    $('#com_prof-front-1').prop('checked', true);
                }
            } else {
                decListCompro(hrg, prc, tim)
            }
            showHargaCompro();
        })

        $('#com_prof-intro-1').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
            } else {
                decListCompro(hrg, prc, tim)
                if ($("#com_prof-intro-2").prop("checked")) {
                    decListCompro(hrg, prc, tim)
                    $('#com_prof-intro-2').prop('checked', false);
                }
            }
            showHargaCompro();
        })

        $('#com_prof-intro-2').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
                if ($("#com_prof-intro-1").prop("checked") == false) {
                    addListCompro(hrg, prc, tim)
                    $('#com_prof-intro-1').prop('checked', true);
                }
            } else {
                decListCompro(hrg, prc, tim)
            }
            showHargaCompro();
        })

        $('#com_prof-hist-1').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
            } else {
                decListCompro(hrg, prc, tim)
                if ($("#com_prof-hist-2").prop("checked")) {
                    decListCompro(hrg, prc, tim)
                    $('#com_prof-hist-2').prop('checked', false);
                }
            }
            showHargaCompro();
        })

        $('#com_prof-hist-2').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
                if ($("#com_prof-hist-1").prop("checked") == false) {
                    addListCompro(hrg, prc, tim)
                    $('#com_prof-hist-1').prop('checked', true);
                }
            } else {
                decListCompro(hrg, prc, tim)
            }
            showHargaCompro();
        })

        $('#com_prof-vis_mis-1').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
            } else {
                decListCompro(hrg, prc, tim);
                if ($("#com_prof-vis_mis-2").prop("checked")) {
                    decListCompro(hrg, prc, tim)
                    $('#com_prof-vis_mis-2').prop('checked', false);
                }
            }
            showHargaCompro();
        })

        $('#com_prof-vis_mis-2').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
                if ($("#com_prof-vis_mis-1").prop("checked") == false) {
                    addListCompro(hrg, prc, tim)
                    $('#com_prof-vis_mis-1').prop('checked', true);
                }
            } else {
                decListCompro(hrg, prc, tim)
            }
            showHargaCompro();
        })

        $('#com_prof-str-1').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
            } else {
                decListCompro(hrg, prc, tim)
                if ($("#com_prof-str-2").prop("checked")) {
                    decListCompro(hrg, prc, tim)
                    $('#com_prof-str-2').prop('checked', false);
                }
            }
            showHargaCompro();
        })

        $('#com_prof-str-2').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
                if ($("#com_prof-str-1").prop("checked") == false) {
                    addListCompro(hrg, prc, tim)
                    $('#com_prof-str-1').prop('checked', true);
                }
            } else {
                decListCompro(hrg, prc, tim)
            }
            showHargaCompro();
        })

        $('#com_prof-services-1').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
            } else {
                decListCompro(hrg, prc, tim)
                if ($("#com_prof-services-2").prop("checked")) {
                    decListCompro(hrg, prc, tim)
                    $('#com_prof-services-2').prop('checked', false);
                }
            }
            showHargaCompro();
        })

        $('#com_prof-services-2').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
                if ($("#com_prof-services-1").prop("checked") == false) {
                    addListCompro(hrg, prc, tim)
                    $('#com_prof-services-1').prop('checked', true);
                }
            } else {
                decListCompro(hrg, prc, tim)
            }
            showHargaCompro();
        })

        $('#com_prof-testi-1').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
            } else {
                decListCompro(hrg, prc, tim)
                if ($("#com_prof-testi-2").prop("checked")) {
                    decListCompro(hrg, prc, tim)
                    $('#com_prof-testi-2').prop('checked', false);
                }
            }
            showHargaCompro();
        })

        $('#com_prof-testi-2').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
                if ($("#com_prof-testi-1").prop("checked") == false) {
                    addListCompro(hrg, prc, tim)
                    $('#com_prof-testi-1').prop('checked', true);
                }
            } else {
                decListCompro(hrg, prc, tim)
            }
            showHargaCompro();
        })

        $('#com_prof-gall-1').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
            } else {
                decListCompro(hrg, prc, tim)
                if ($("#com_prof-gall-2").prop("checked")) {
                    decListCompro(hrg, prc, tim)
                    $('#com_prof-gall-2').prop('checked', false);
                }
            }
            showHargaCompro();
        })

        $('#com_prof-gall-2').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
                if ($("#com_prof-gall-1").prop("checked") == false) {
                    addListCompro(hrg, prc, tim)
                    $('#com_prof-gall-1').prop('checked', true);
                }
            } else {
                decListCompro(hrg, prc, tim)
            }
            showHargaCompro();
        })

        $('#com_prof-add-1').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
            } else {
                decListCompro(hrg, prc, tim)
                if ($("#com_prof-add-2").prop("checked")) {
                    decListCompro(hrg, prc, tim)
                    $('#com_prof-add-2').prop('checked', false);
                }
            }
            showHargaCompro();
        })

        $('#com_prof-add-2').on('click', function() {
            var hrg = 150000;
            var prc = 11;
            var tim = 1;
            if (this.checked) {
                addListCompro(hrg, prc, tim)
                if ($("#com_prof-add-1").prop("checked") == false) {
                    addListCompro(hrg, prc, tim)
                    $('#com_prof-add-1').prop('checked', true);
                }
            } else {
                decListCompro(hrg, prc, tim)
            }
            showHargaCompro();
        })
    </script>
    {{-- Compro end --}}

    {{-- Ecom start --}}
    <script>
        var harga_ols = 0;
        var price_ols = 0;
        var time_ols = 0;

        function addListOls(hrg, prc, tim) {
            harga_ols = harga_ols + hrg;
            price_ols = price_ols + prc;
            time_ols = time_ols + tim;
        }

        function decListOls(hrg, prc, tim) {
            harga_ols = harga_ols - hrg;
            price_ols = price_ols - prc;
            time_ols = time_ols - tim;
        }

        function showHargaOls() {
            let hargaidr_ols = harga_ols.toLocaleString({
                style: "currency",
                currency: "IDR"
            });
            let priceusd_ols = price_ols.toLocaleString({
                style: "currency",
                currency: "USD"
            });
            $('.harga-ols').html(hargaidr_ols);
            $('.price-ols').html(priceusd_ols);
            $('.time-ols').html(time_ols);
        }

        $('#e_com-payment-1').on('click', function() {
            var hrg = 2000000;
            var prc = 140;
            var tim = 2;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-payment-2').on('click', function() {
            var hrg = 10000000;
            var prc = 700;
            var tim = 12;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-invoice-1').on('click', function() {
            var hrg = 7000000;
            var prc = 490;
            var tim = 8;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-invoice-2').on('click', function() {
            var hrg = 4000000;
            var prc = 280;
            var tim = 8;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-list_item-1').on('click', function() {
            var hrg = 500000;
            var prc = 35;
            var tim = 1;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-list_item-2').on('click', function() {
            var hrg = 10000000;
            var prc = 700;
            var tim = 7;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-list_item-3').on('click', function() {
            var hrg = 1000000;
            var prc = 70;
            var tim = 2;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-list_item-4').on('click', function() {
            var hrg = 2000000;
            var prc = 140;
            var tim = 2;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-list_item-5').on('click', function() {
            var hrg = 1000000;
            var prc = 70;
            var tim = 2;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-list_item-6').on('click', function() {
            var hrg = 1000000;
            var prc = 70;
            var tim = 2;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-list_item-7').on('click', function() {
            var hrg = 2000000;
            var prc = 140;
            var tim = 2;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-cust_man-1').on('click', function() {
            var hrg = 1500000;
            var prc = 105;
            var tim = 2;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-cust_man-2').on('click', function() {
            var hrg = 10000000;
            var prc = 700;
            var tim = 10;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-cust_man-3').on('click', function() {
            var hrg = 2000000;
            var prc = 140;
            var tim = 3;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-cust_man-4').on('click', function() {
            var hrg = 1000000;
            var prc = 70;
            var tim = 2;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-marketing-1').on('click', function() {
            var hrg = 4000000;
            var prc = 280;
            var tim = 8;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-marketing-2').on('click', function() {
            var hrg = 7000000;
            var prc = 490;
            var tim = 8;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-fin-1').on('click', function() {
            var hrg = 2000000;
            var prc = 140;
            var tim = 3;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })

        $('#e_com-fin-2').on('click', function() {
            var hrg = 2000000;
            var prc = 140;
            var tim = 3;
            if (this.checked) {
                addListOls(hrg, prc, tim)
            } else {
                decListOls(hrg, prc, tim)
            }
            showHargaOls();
        })
    </script>
    {{-- Ecom end --}}

    <script>
        $(document).on('click', '#not_ready', function(e) {
            swal({
                    title: "Almost There!",
                    text: "But, our automatic payment system is still off for now :( Do you want to contact me personaly?",
                    type: "info",
                    confirmButtonText: "Yes!",
                    showCancelButton: true
                })
                .then((result) => {
                    if (result.value) {
                        window.location = 'https://mailto:tubagusflow@gmail.com';
                    } else if (result.dismiss === 'cancel') {
                        swal(
                            'Well, maybe next time',
                            'Enjoy your day :D',
                            //   'error'
                        )
                    }
                })

        });
    </script>

    <script>
        $(document).ready(function() {

            // $('.grid').isotope({
            //     itemSelector: '.grid-item',
            // });

            // filter items on button click
            $('.filter-button-group').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                $('.grid').isotope({
                    filter: filterValue
                });
                $('.filter-button-group li').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>

    @yield('js')

</body>

</html>
