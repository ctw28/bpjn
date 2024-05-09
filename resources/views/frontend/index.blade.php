@extends('frontend/template')

@section('head')
<script>
    showSlide()


    function showSlide() {
        let url = `${base_url}/api/get-slide-show?is_web=true&showall=true`

        fetch(url)
            .then(response => {
                // Memeriksa apakah responsenya sukses (status code 200)
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                // Mengembalikan data JSON dari respons
                return response.json();
            })
            .then(data => {
                // Data berhasil diambil, lakukan sesuatu dengan data
                console.log(data);
                // Contoh: memproses data dan menampilkannya di halaman web
                let contents = ''
                data.map(data => {
                    contents += `
                            <div class="header-carousel-item">
                                <img src="{{asset('/')}}${data.path}" class="img-fluid w-100" alt="Image">
                                <div class="carousel-caption">
                                    <div class="carousel-caption-content p-3">
                                        <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Selamat Datang di</h5>
                                        <h1 class="display-1 text-capitalize text-white mb-4">Website BPJN Sulawesi Tenggara</h1>
                                        <!-- <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                </p> -->
                                        <!-- <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Lebih Lanjut</a> -->
                                    </div>
                                </div>
                            </div>
                        `
                })
                // div.innerHTML = contents

                document.querySelector('#slide').innerHTML = contents
                // document.querySelector('#slide').appendChild(div)
            })
            .catch(error => {
                // Tangani kesalahan jika gagal mengambil data
                console.error('There was a problem with the fetch operation:', error);
            });
        // let fetchRequest = await fetch(url)
        // response = await fetchRequest.json()
        // console.log(response);
        // let div = document.createElement('div')
        // div.className = 'header-carousel-item'
        // let contents = ''


    }
</script>
<style>
    .news-container {
        width: 100%;
        overflow: hidden;
        color: #fff;
    }

    .news-ticker {
        white-space: nowrap;
    }
</style>
@endsection
@section('content')

<!-- Carousel Start -->

<div class="header-carousel owl-carousel" id="slide">

</div>
<!-- <div class="col-12" style="background-color:#ffc107; padding: 10px"> -->
<!-- <div class="col-12" style="background-color:#ffc107; padding: 10px"> -->
<div class="col-12" style="background-color:#2c3e50; padding: 10px">
    <div class="container">

        <div class="row">
            <div class="col-1">
                <span style="border-radius:10px; background-color: #fba026; padding:1% 5%; color:#000">
                    PENGUMUMAN
                </span>
            </div>
            <div class="col-10" style="margin-left:5%">
                <div class="btn-group" role="group">
                    <a style="color: #fff; margin-right:10%" href="#" id="prevButton"><i class="fas fa-chevron-left"></i></a>
                    <div class="news-container">
                        <div id="newsTicker" class="news-ticker"></div>
                    </div>
                    <a style="color: #fff; margin-left:10%" href="#" id="nextButton"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12" style="background-color:#cbd6c9; padding: 10px">
    <div class="container">
        <div class="row">
            <div class="col-1" style="vertical-align:middle">
                <span style="color: #000;">PENCARIAN</span>
            </div>
            <div class="col-7" style="margin-left:5%">
                <div class="row">
                    <div class="col-10">
                        <input type="text" class="form-control" style="padding: 5px 10px" placeholder="Cari berita/pengumuman/galeri di sini">
                    </div>
                    <div class="col-2">
                        <button style="color: #fff;" type="button" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Cari</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a id="instagram" href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                    <a id="youtube" href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-youtube"></i></a>
                    <a id="facebook" href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                    <a id="twitter" href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Carousel End -->
</div>
<!-- Navbar & Hero End -->


<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="section-title mb-5">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0" style="color:#000">Berite Terkini</h4>
            </div>
            <!-- <h1 class="display-3 mb-4">Our Service Given Physio Therapy By Expert.</h1> -->
            <!-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
        </div>
        <div class="row g-4 justify-content-center" id="berita-container">
        </div>
        <div class="col-12 text-center">
            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{route('konten.list','berita')}}">Selengkapnya</a>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Team Start -->
<div class="container-fluid team py-2">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0" style="color:#000">GALERI FOTO</h4>
            </div>
            <!-- <h1 class="display-3 mb-4">Physiotherapy Services from Professional Therapist</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
        </div>
        <div class="row g-4 justify-content-center" id="galeri">

        </div>
    </div>
</div>
<!-- Team End -->

<div id="aplikasi-terkait"></div>

@endsection

@section('scripts')
<script>
    showPengumuman()
    showBerita()
    showAplikasiTerkait()

    showMediaSosial()
    showGaleri()

    async function showGaleri() {
        var url = `${base_url}/api/list-galeri?is_web=true&showall=true`;
        console.log(url);
        let fetchRequest = await fetch(url)
        response = await fetchRequest.json()
        console.log(response);
        let contents = ''
        response.map(data => {
            contents += `
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="{{asset('/')}}${data.path}" class="img-fluid rounded-top w-100" alt="">

                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Nama Galeri</h5>
                        <p class="mb-0">tanggal</p>
                    </div>
                </div>
            </div>
            `
        })
        document.querySelector('#galeri').innerHTML = contents
    }


    async function showMediaSosial() {
        let url = `${base_url}/api/info-web`
        let fetchRequest = await fetch(url)
        response = await fetchRequest.json()
        console.log(response);
        document.getElementById('instagram').setAttribute('href', response.data[0].ig)
        document.getElementById('facebook').setAttribute('href', response.data[0].fb)
        document.getElementById('youtube').setAttribute('href', response.data[0].youtube)
        document.getElementById('twitter').setAttribute('href', response.data[0].twitter)
    }
    async function showAplikasiTerkait() {
        let url = `${base_url}/api/get-html-code?is_web=true&showall=true&slug=aplikasi-terkait`
        let fetchRequest = await fetch(url)
        response = await fetchRequest.json()
        // console.log();
        document.getElementById('aplikasi-terkait').innerHTML = response[0].code

    }
    async function showPengumuman() {
        const newsTicker = document.getElementById('newsTicker');
        let url = `${base_url}/api/list-konten?jenis=pengumuman&is_web=true&limit=3&publikasi=1`
        let fetchRequest = await fetch(url)
        response = await fetchRequest.json()
        console.log(response);
        var headlines = [];
        response.map((data, index) => {
            var urlread = `${base_url}/konten/${data.jeniskonten.slug}/${data.slug}`

            headlines[index] = `<a style="color:#fff" href="${urlread}">${data.judul}</a>`
        })
        let index = 0;

        function displayHeadline() {
            newsTicker.innerHTML = `${headlines[index]}`;
        }
        document.getElementById('nextButton').addEventListener('click', function() {
            index = (index + 1) % headlines.length;
            displayHeadline();
        });
        document.getElementById('prevButton').addEventListener('click', function() {
            index = (index - 1 + headlines.length) % headlines.length;
            displayHeadline();
        });
        displayHeadline();
    }
    async function showBerita() {
        let url = `${base_url}/api/list-konten?jenis=berita&is_web=true&limit=6&publikasi=1`
        let fetchRequest = await fetch(url)
        response = await fetchRequest.json()
        console.log(response);
        // return 
        let contents = '';
        response.map((data, index) => {
            let thumbnail = (data.thumbnail !== null) ? data.thumbnail : "{{ url('images/thumbnail.jpg') }}";
            let link = '{{ route("konten",[":kategori",":slug"]) }}';
            link = link.replace(':kategori', data.jeniskonten.slug)
            link = link.replace(':slug', data.slug)
            contents += ` 
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item rounded">
                    <div class="blog-img">
                        <img src="${thumbnail}" class="img-fluid w-100" alt="Image">
                    </div>
                    <div class="blog-centent p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> ${data.waktu}</p>
                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> ${data.komentar_count} Comments</a>
                        </div>
                        <a href="${link}" class="h4">${data.judul}</a>
                        <p class="my-4">${data.pembuka}</p>
                    </div>
                </div>
            </div>
            `
        })
        document.querySelector('#berita-container').innerHTML = ''
        document.querySelector('#berita-container').innerHTML = contents
    }
</script>
@endsection