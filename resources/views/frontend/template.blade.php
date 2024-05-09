<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BPJN Sulawesi Tenggara</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{asset('/')}}logo_pu.jpeg" />

    <!-- Libraries Stylesheet -->
    <!-- <link href="{{asset('/')}}frontend/assets/lib/animate/animate.min.css" rel="stylesheet"> -->
    <link href="{{asset('/')}}frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/')}}frontend/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('/')}}frontend/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        var base_url = "{{ url('/') }}";
    </script>
    @yield('head')

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="https://binamarga.pu.go.id"><img width="10%" src="https://binamarga.pu.go.id/balai-babel/templates/frontend/img/home-logo.png" alt="Home Logo"></a>
                </div>
            </div>
            <!-- <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{url('/')}}" class="navbar-brand p-0">
                <!-- <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>Terapia</h1> -->
                <img src="{{asset('/')}}frontend/logo_pu.jpeg" alt="Logo"> BPJN Sulawesi Tenggara
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav ms-auto py-0" id="navbarCollapse">
                </div>
                <!-- <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book Appointment</a> -->
            </div>
        </nav>
        @yield('content')


        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item d-flex flex-column">
                                <h4 class="mb-4 text-white">Profil</h4>
                                <a href=""><i class="fas fa-angle-right me-2"></i> Visi & Misi</a>
                                <a href=""><i class="fas fa-angle-right me-2"></i> Struktur Organisasi</a>
                                <a href=""><i class="fas fa-angle-right me-2"></i> Informasi Pejabat</a>
                                <a href=""><i class="fas fa-angle-right me-2"></i> Kontak</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Galeri</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Galeri Foto</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Navigasi</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> e-PPID</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Peta Situs</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Kontak Kami</h4>
                            <a href="{{url('/')}}"><b><span id="nama-kantor">BPJN Sulawesi Tenggara</span></b></a>
                            <span><i class="fas fa-envelope me-2"></i> <span id="alamat-kantor">Jalan .......</span></span>
                            <span><i class="fas fa-envelope me-2"></i> <span id="email-kantor">email@example.com</span></span>
                            <span><i class="fas fa-phone me-2"></i> <span id="telp-kantor">+012 345 67890</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>BPJN Sulawesi Tenggara</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/lib/wow/wow.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/lib/easing/easing.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/lib/waypoints/waypoints.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/lib/owlcarousel/owl.carousel.min.js"></script>


        <!-- Template Javascript -->
        <script src="{{asset('/')}}frontend/assets/js/main.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/frontend/menu.js"></script>

        <script>
            showWebInfo()
            async function showWebInfo() {
                let url = `${base_url}/api/info-web`
                let fetchRequest = await fetch(url)
                response = await fetchRequest.json()
                console.log(response);
                document.getElementById('nama-kantor').innerText = response.data[0].nama
                document.getElementById('alamat-kantor').innerText = response.data[0].alamat
                document.getElementById('email-kantor').innerText = response.data[0].email
                document.getElementById('telp-kantor').innerText = response.data[0].helpdesk
            }

            showMenu()
            async function showMenu() {
                let url = `${base_url}/api/load-menu-tree`
                let fetchRequest = await fetch(url)
                response = await fetchRequest.json()
                let contents = ''
                response.map((data, index) => {
                    if (index != 0) {
                        if (!data.inc) {
                            contents += `<a href="${data.url}" class="nav-item nav-link">${data.text}</a>`
                        } else {
                            contents += `<div class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">${data.text}</a>
                                            <div class="dropdown-menu m-0">`
                            data.inc.map(submenu => {
                                contents += `<a href="${base_url}/${submenu.url}" class="dropdown-item">${submenu.text}</a>`
                            })
                            contents += `   </div>
                                        </div>`
                        }
                    }
                })
                document.querySelector('#navbarCollapse').innerHTML = contents

            }
        </script>
        @yield('scripts')
</body>

</html>