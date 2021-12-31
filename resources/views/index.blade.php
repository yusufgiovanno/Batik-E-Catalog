    <?php
    use Illuminate\Support\Facades\Session;
    ?>
    <!DOCTYPE html>
    <html lang="en">


    <head>
        <title>Zakiyah Batik</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="../fonts/icomoon/style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="../css/aos.css">
        <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="../css/style.css">

        <style>
            .mids {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            .resvid {
                position: relative;
                width: 100%;
                padding-bottom: 56.25%;
                margin: auto
            }

            .resvid iframe {
                position: absolute;
                width: 100%;
                height: 100%
            }

            .resvid.alt {
                width: 35%;
                padding-bottom: 62.22%
            }

            .resvid.square {
                width: 70%;
                padding-bottom: 70%
            }

            .resvid.old {
                width: 80%;
                padding-bottom: 60%
            }

            @media screen and (max-width:1000px) {
                .resvid.alt {
                    width: 50%;
                    padding-bottom: 88.89%
                }

                .resvid.old {
                    padding-bottom: 75%
                }
            }

            @media screen and (max-width:600px) {
                .resvid.alt {
                    width: 100%;
                    padding-bottom: 177.78%
                }

                .resvid.square {
                    width: 100%;
                    padding-bottom: 100%
                }
            }

            .resvid .video-sticker.sticked {
                position: fixed;
                width: 250px;
                height: 140.63px;
                bottom: 66%;
                left: 82%;
                z-index: 2000
            }

            .resvid.alt .video-sticker.sticked {
                height: 444.44px;
                max-height: 80vh
            }

            .resvid.square .video-sticker.sticked {
                height: 250px
            }

            .video-sticker-remover {
                display: none;
                position: absolute;
                top: -30px;
                right: 0;
                font-size: 20px;
                height: 20px;
            }

            .video-sticker.sticked .video-sticker-remover {
                display: block;
                cursor: pointer
            }

            .video-sticker-remover::before {
                content: "\00d7"
            }

        </style>

    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        @if (\Session::has('info'))
            <script>
                alert('{{ Session::get('info') }}')
            </script>
        @endif
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <form method="post" action="/login">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title">Masuk</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            @csrf
                            <div class="container">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn rounded-0 btn-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn rounded-0 btn-primary">Masuk</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div> <!-- .site-mobile-menu -->

            <div class="site-navbar-wrap">

                <div class="site-navbar site-navbar-target js-sticky-header">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-6 col-md-4">
                                <h1 class="my-0 site-logo"><a href="index.html">Zakiyah Batik<span
                                            class="text-primary">.</span>
                                    </a></h1>
                            </div>
                            <div class="col-6 col-md-8">
                                <nav class="site-navigation text-right" role="navigation">
                                    <div class="container">

                                        <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#"
                                                class="site-menu-toggle js-menu-toggle text-black">
                                                <span class="icon-menu h3"></span> <span
                                                    class="menu-text"></span>
                                            </a></div>

                                        <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                                            @if (Session::get('status'))
                                                <li><a href="/dashboard" class="nav-link">Dashboard</a></li>
                                            @else
                                                <li><a href="#" class="nav-link" data-toggle="modal"
                                                        data-target="#myModal">Masuk</a></li>
                                            @endif
                                            <li><a href="#home-section" class="nav-link">Beranda</a></li>
                                            <li><a href="#about-section" class="nav-link">Tentang Kami</a></li>
                                            <li><a href="#what-we-do-section" class="nav-link">Katalog</a></li>
                                            <li><a href="#contact-section" class="nav-link">Hubungi Kami</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- END .site-navbar-wrap -->

            <div class="site-blocks-cover" id="home-section">
                <div class="img-wrap">
                    <div class="owl-carousel slide-one-item hero-slider">
                        <div class="slide overlay">
                            <img src="{{ url('/storage/Slides/1.jpg') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="slide overlay">
                            <img src="{{ url('/storage/Slides/2.jpg') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="slide overlay">
                            <img src="{{ url('/storage/Slides/3.jpg') }}" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 align-self-center">
                            <div class="intro">
                                <div class="heading">
                                    <h1>Zakiyah <small>Batik</small></h1>
                                </div>
                                <div class="text">
                                    <p class="sub-text mb-5">Khas Batik Madura.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- END .site-blocks-cover -->

            <div class="site-section" id="about-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-5">
                            <img src="{{ url('/storage/Slides/4.jpg') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-lg-5 ml-auto section-title">
                            <span class="sub-title mb-2 d-block">Tentang Kami</span>
                            <h2 class="title text-primary mb-3">Zakiyah Batik.</h2>
                            <p class="mb-4">{{ $set->Tentang }}</p>
                            <embed
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.434474166967!2d112.59430111477909!3d-7.9539728942709536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788267f11d1bcf%3A0xc2e9141fba34015b!2sSupplier%20Batik%20Madura!5e0!3m2!1sen!2sid!4v1640960319103!5m2!1sen!2sid"
                                style="border:0; width:100%; height:100%" allowfullscreen="" loading="lazy">

                            <div class="d-flex">
                                <div class="row">
                                    <div class="col-md-10">
                                    </div>
                                    <div class="col-md-2">
                                        <iframe src="https://www.youtube.com/embed/{{ $set->Video }}" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <br><br><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-center">
                                        <a data-fancybox data-ratio="2" href="{{ $set->LinkFacebook }}"
                                            class="d-flex align-items-center"><span
                                                class="icon-facebook h4 m-0 mr-2"></span>
                                            <span>{{ $set->Facebook }}</span>
                                        </a>
                                    </p>
                                </div><br>
                                <div class="col-md-6">
                                    <p class="text-center">
                                        <a data-fancybox data-ratio="2" href="{{ $set->LinkInstagram }}"
                                            class="d-flex align-items-center"><span
                                                class="icon-instagram h4 m-0 mr-2"></span>
                                            <span>{{ $set->Instagram }}</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .END site-section -->

            <div class="bg-light" id="what-we-do-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-6 section-title">
                            <span class="sub-title mb-2 d-block" style="margin-top:25px">Katalog</span>
                            <h5 class=" text-primary">Daftar Koleksi Batik Kami</h5>
                        </div>
                        <div class="col-lg-6 section-title">
                            <input type="text" class="form-control bg-white" placeholder="Pencarian .."
                                style="margin-top:25px;" onkeyup="filter()" id="search">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ml-auto">
                            <div class="row" id="gallery">
                            </div>
                            <h4 class="text-center text-primary">Gallery</h4>
                            <div class="row">
                                @foreach ($datas as $d)
                                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                        <div class="service h-100">
                                            <h4 class="text-primary">{{ $d->ProdukNama }}</h4>
                                            <img src="{{ url('storage/' . $d->ProdukFoto) }}"
                                                class="img img-fluid img-thumbnail mids value-img" style="height:275px"
                                                data-action="zoom"
                                                data-original="{{ url('storage/' . $d->ProdukFoto) }}">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6 class="text-center">Kode : {{ $d->ProdukKode }}</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>&nbsp; Rp. {{ number_format($d->ProdukHarga, 0, '', '.') }}
                                                    </h6>
                                                </div>
                                            </div>
                                            <p class="text-center">{{ $d->ProdukDesc }}.</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-center">
                                {{ $datas->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- END .site-section -->

        </div>

        <div class="site-section" id="contact-section">
            <div class="container">
                <form action="/pesan" method="post" class="contact-form">

                    @csrf

                    <div class="section-title text-center mb-5">
                        <span class="sub-title mb-2 d-block">Hubungi Kami</span>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <input type="text" class="form-control" placeholder="Nama Depan" name="depan">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Nama Belakang" name="belakang">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Email / No. Hp" name="email">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <textarea class="form-control" id="" cols="30" rows="10" placeholder="Pesan"
                                name="pesan"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-md">Kirim</button>
                        </div>
                    </div>

                </form>
            </div>
        </div> <!-- END .site-section -->

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="row mb-5">
                            <div class="col-12">
                                <h3 class="footer-heading mb-4">Tentang Kami</h3>
                                <p>Sebuah studio batik yang berlokasikan di Kota Malang, Jawa Timur
                                    dengan komitmen untuk memberi kualitas batik terbaik..</p>
                            </div>
                        </div>



                    </div>
                    <div class="col-lg-3 ml-auto">

                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Navigasi</h3>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#home-section">Beranda</a></li>
                                    <li><a href="#what-we-do-section">Katalog</a></li>
                                    <li><a href="#about-section">Tentang Kami</a></li>
                                    <li><a href="#contact-section">Hubungi Kami</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>


                    <div class="col-lg-4 mb-5 mb-lg-0">

                        <div class="mb-5">
                            <h3 class="footer-heading mb-2">Langganan Berita</h3>


                            <form method="post" class="form-subscribe">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control border-white text-white bg-transparent"
                                        placeholder="Masukkan E-mail" aria-label="Enter Email"
                                        aria-describedby="button-addon2">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary px-5" type="submit">Langganan</button>
                                </div>
                            </form>

                        </div>




                    </div>

                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>

                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made
                            with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>

                    </div>

                </div>
            </div>
        </footer>
        </div>

        <script src="../js/zooming.min.js"></script>
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/aos.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        <script src="../js/stickyfill.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/jquery.fancybox.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            new Zooming().listen('img')

            //wrapper
            Array.from(document.querySelectorAll("iframe")).forEach(function(a) {
                const r = a.width / a.height,
                    reswrapper = document.createElement("div");

                reswrapper.classList.add("resvid",
                        `${9 / 16 === r ? "alt" : 4 / 3 === r ? "old" : r === 1 && "square"}`),
                    a.parentElement.insertBefore(reswrapper, a);
                reswrapper.appendChild(a)
            })

            //sticker
            const youtubevid = document.getElementsByClassName("resvid"),
                notsticker = document.getElementsByClassName("not-sticker");

            function sticker() {
                const sticker = document.getElementsByClassName("video-sticker")[0],
                    scrolltop = window.scrollY;
                let offsettop;

                1 === youtubevid.length && 0 === notsticker.length && (
                    offsettop = youtubevid[0].offsetTop,
                    offsettop + youtubevid[0].offsetHeight > scrolltop && scrolltop + window.innerHeight > offsettop ?
                    sticker.classList.remove("sticked") : sticker.classList.add("sticked")
                );
            }

            window.addEventListener("scroll", sticker);
            document.addEventListener("DOMContentLoaded", function() {
                const iframe = document.getElementsByClassName("resvid")[0].getElementsByTagName("iframe")[0],
                    wrapper = document.createElement("div"),
                    remover = document.createElement("div");

                1 === youtubevid.length && 0 === notsticker.length && (
                        wrapper.className = "video-sticker",
                        remover.className = "video-sticker-remover",
                        remover.addEventListener("click", function(a) {
                            a.parentNode.removeAttribute("class")
                        }),
                        iframe.parentNode.insertBefore(wrapper, iframe),
                        wrapper.appendChild(iframe),
                        wrapper.appendChild(remover)
                    ),
                    sticker()
            });

            function filter() {
                key = $("#search").val();
                $.ajax({
                    url: "/filter",
                    type: "GET",
                    data: {
                        'key': key,
                    },
                    success: function(data) {
                        $('#gallery').html(data);
                    }
                });
            }
        </script>


    </body>

    </html>
